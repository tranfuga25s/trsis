<?php
App::uses( 'AppController', 'Controller' );
App::uses('CakeEmail', 'Network/Email');

class UsuariosController extends AppController {

    public function beforeFilter() {
         
/*        $this->Auth->allow(array('ingresar',
            'administracion_ingresaradmin',
            'administracion_salir',
            'salir',
            'recuperarContra',
            'registrarse',
            'cancelar',
            'eliminarUsuario'));*/
        $this->Auth->allow('*');
    }

    public function verificar() {
        $this->autoRender = false;
        if ($this->request->isPost() && isset($this->request->query['num_cliente'])) {
            $id_usuario = $this->request->query['num_cliente'];
            $contra = $this->request->query['codigo'];
            $this->loadModel('Usuario');
            $this->Usuario->id = $id_usuario;
            if (!$this->Usuario->exists()) {
                return json_encode(array('error' => true, 'texto' => 'El numero de cliente no corresponde a un cliente registrado'));
            }
            $this->loadModel('ServicioBackupUsuario');
            $cod = $this->ServicioBackupUsuario->buscarCodigo($id_usuario);
            if ($cod != $contra) {
                return json_encode(array('error' => true, 'texto' => 'El codigo de seguridad no coincide para su cliente.'));
            }
            // Retorno los datos para mostrarlos
            $id_servicio_backup = $this->ServicioBackupUsuario->buscarIdServicioBackup($id_usuario);
            if ($id_servicio_backup == false) {
                return json_encode(array('error' => true, 'texto' => 'No existe una asociación de su usuario con un servicio de backup'));
            }
            $this->loadModel('ServicioBackup');
            $datos = $this->ServicioBackup->read(null, $id_servicio_backup);
            $this->loadModel('ServicioBackupUsuario');
            $temp = $this->ServicioBackupUsuario->find('first', array('conditions' => array('ServicioBackupUsuario.id_servicio_backup' => $id_servicio_backup, 'ServicioBackupUsuario.id_usuario' => $id_usuario)));
            $datos['ServicioBackupUsuario'] = $temp['ServicioBackupUsuario'];
            return json_encode(
                    array('cantidad' => $datos['ServicioBackupUsuario']['cantidad'],
                        'limite_cantidad' => $datos['ServicioBackup']['limite_cantidad'],
                        'espacio' => $datos['ServicioBackupUsuario']['espacio'],
                        'limite_espacio' => $datos['ServicioBackup']['limite_espacio'],
                        'nombre' => $datos['Servicio']['nombre'],
                        'suspendido' => $datos['ServicioBackupUsuario']['suspendido'],
                        'error' => false,
                        'texto' => ''
                    )
            );
        } else {
            return json_encode(array('error' => true, 'texto' => 'Metodo no soportado'));
        }
    }

    /*!
     * 
     */
    public function ingresar() {
        if ($this->request->isPost()) {
            if ($this->Auth->login($this->data)) {
                $this->redirect(array('controller' => 'clientes', 'action' => 'inicio'));
            } else {
                $this->Session->setFlash("Nombre de usuario o codigo incorrecto");
            }
        } else if ($this->Auth->loggedIn()) {
            $this->redirect(array('controller' => 'clientes', 'action' => 'inicio'));
        }
    }

    /*!
     * 
     */
    public function registrar() {
        if ($this->request->isPost()) {

            $this->loadModel('Cliente');
            if ($this->Cliente->existe($this->data['Usuario']['email'])) {
                $this->Session->setFlash('El email utilizado ya existe como cliente. <br />Por favor, recupere sus datos de ingreso desde la seccion "ya soy cliente"');
                $this->redirect(array('action' => 'ingresar'));
            }
            $id_cliente = -1;
            if (!$this->Cliente->darDeAlta($this->data['Usuario']['nombre'], $this->data['Usuario']['email'], $this->data['Usuario']['telefono'], $id_cliente)) {
                $this->Session->setFlash('No se pudo agregar el cliente necesario');
                $this->redirect(array('action' => 'ingresar'));
            }
            $this->data['Usuario']['cliente_id'] = $id_cliente;
            $this->Usuario->create();
            if (!$this->Usuario->save($this->data)) {
                $this->Session->setFlash('No se pudo guardar el usuario');
                $this->redirect(array('action' => 'ingresar'));
            }
            // Mensaje de bienvenida
            $this->loadModel('Aviso');
            $this->Aviso->bienvenida($this->data['Usuario']['id_usuario']);
            // Listo
            $this->Session->setFlash('Bienvenido a nuestro sistema');
            $this->redirect(array('controller' => 'clientes', 'action' => 'inicio'));
        } else {
            $this->Session->setFlash('Metodo de registro desconocido');
        }
    }

    /*!
     * 
     */
    public function logout() {
        if ($this->Auth->logout()) {
            $this->redirect('/');
        }
    }

    /*!
     * 
     */
    public function recordarContra() {
        if ($this->request->isPost()) {
            // Tengo que recibir una dirección de email y desde ahi trabajar
            if (!array_key_exists('Usuario', $this->request->data) ||
                    !array_key_exists('email', $this->request->data['Usuario'])) {
                $this->Session->setFlash('Por favor, ingrese una dirección de email');
                return $this->redirect(array('action' => 'ingresar'));
            }

            // Verifico que sea una direccion de correo real
            $this->Usuario->set($this->request->data);
            if (!$this->Usuario->validates()) {
                $this->Session->setFlash('Por favor, ingrese una dirección de email válida');
                return $this->redirect(array('action' => 'ingresar'));
            }

            if (!$this->Usuario->verificarSiExiste($this->request->data['Usuario']['email'])) {
                $this->Session->setFlash('La dirección proporcionada no está dada de alta en el sistema');
                return $this->redirect(array('action' => 'ingresar'));
            }

            // Busco los datos necesarios para generar el email
            $usuario = $this->Usuario->findByEmail($this->request->data['Usuario']['email']);
            // Coloco una contraseña nueva predeterminada
            $usuario['Usuario']['codigo'] = $this->Usuario->generarNuevaContraseña($this->request->data['Usuario']['email'], "");
            $usuario['Usuario']['contra'] = $usuario['Usuario']['codigo'];
            if ($this->Usuario->save($usuario)) {
                $email = new CakeEmail();
                $email->addTo($usuario['Usuario']['email'])
                        ->from('no-reply@gestotux.com.ar')
                        ->subject('Datos de acceso')
                        ->template('recupera', 'usuario')
                        ->viewVars(array('usuario' => $usuario))
                        ->send();
                $this->Session->setFlash('Se enviaron los datos de acceso a la dirección proporcionada.');
            } else {
                $this->Session->setFlash('No se pudo generar una nueva contraseña de acceso');
            }
        } else {
            throw new NotFoundException('Metodo de envio no implementado!');
        }
        $this->redirect(array('action' => 'ingresar'));
    }

    /*!
     * Metodo de login de usuario para la administracion
     * @return void
     */
    public function administracion_ingresaradmin() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect('/administracion/usuarios/cpanel');
            } else {
                //echo AuthComponent::password($this->request->data['Usuario']['contra']);
                $this->Session->setFlash('El email ingresado o la contraseña son incorrectas', 'default', array('class' => 'error'), 'auth');
            }
        }
    }

    /**
     * Metodo de salir de login de usuario para la administracion
     *
     * @return void
     */
    public function administracion_salir() {
        // Evita el problema del loggeo por facebook
        $this->Session->destroy();
        $this->redirect($this->Auth->logout());
    }

    /**
     * Metodo para mostrar el panel de control de la administración
     * @return void
     */
    public function administracion_cpanel() {
        
    }

    /**
     * Listado de usuarios de la administración.
     *
     * @return void
     */
    public function administracion_index() {
        $this->Usuario->recursive = 0;
        $this->set('usuarios', $this->paginate());
    }

    /**
     * administracion_view method
     *
     * @param string $id
     * @return void
     */
    public function administracion_view($id = null) {
        $this->Usuario->id = $id;
        if (!$this->Usuario->exists()) {
            throw new NotFoundException('Usuario invalido');
        }
        $this->set('usuario', $this->Usuario->read(null, $id));
    }

    /**
     * administracion_add method
     *
     * @return void
     */
    public function administracion_add() {
        if ($this->request->is('post')) {
            $this->Usuario->create();
            if ($this->Usuario->save($this->request->data)) {
                $this->Session->setFlash( 'El usuario se agregó correctamente' );
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->error('Los datos del usuario no se pudieron guardar. Por favor, intentelo nuevamente.');
            }
        }
    }

    /**
     * administracion_edit method
     *
     * @param string $id
     * @return void
     */
    public function administracion_edit($id = null) {
        $this->Usuario->id = $id;
        if (!$this->Usuario->exists()) {
            throw new NotFoundException('Usuario invalido');
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Usuario->save($this->request->data)) {
                $this->Session->correcto('Los datos del usuario se modificaron correctamente');
                $this->borrarCacheUsuarios();
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->incorrecto('Los datos del usuario no pudieron ser guardados correctamente. Por favor intente nuevamente.');
            }
        }
        $this->request->data = $this->Usuario->read(null, $id);
        $this->set('grupos', $this->Usuario->Grupo->find('list'));
        $this->set('obras_sociales', $this->Usuario->ObraSocial->find('list'));
    }

    /**
     * administracion_delete method
     *
     * @param string $id
     * @return void
     */
    public function administracion_delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->Usuario->id = $id;
        if (!$this->Usuario->exists()) {
            throw new NotFoundException('El usuario no es valido');
        }
        $this->loadModel('Turno');
        if ($this->Turno->find('count', array('conditions' => array('paciente_id' => $id))) > 0) {
            $this->Session->incorrecto("No se pudo eliminar el usuario solicitado. \n <b>Razón:</b> El usuario tiene turnos asociados todavía.");
            $this->redirect(array('action' => 'index'));
        }
        $this->loadModel('Medico');
        if ($this->Medico->find('count', array('conditions' => array('usuario_id' => $id))) > 0) {
            $this->Session->incorrecto("No se pudo eliminar el usuario solicitado. \n <b>Razón:</b> El usuario tiene un medico asociado");
            $this->redirect(array('action' => 'index'));
        }
        $this->loadModel('Secretaria');
        if ($this->Secretaria->find('count', array('conditions' => array('usuario_id' => $id))) > 0) {
            $this->Session->incorrecto("No se pudo eliminar el usuario solicitado. \n <b>Razón:</b> El usuario tiene una secretaria asociada");
            $this->redirect(array('action' => 'index'));
        }
        if ($this->Usuario->delete()) {
            $this->borrarCacheUsuarios();
            $this->Session->correcto('El Usuario ha sido eliminado correctamente');
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->incorrecto('El Usuario no fue eliminado');
        $this->redirect(array('action' => 'index'));
    }

    /**
     * Función para cambiar la contraseña
     * @param string $id_usuario Identificador de usuario
     */
    public function administracion_cambiarContra($id_usuario = null) {
        if ($this->request->is('post')) {
            if ($this->request->data['Usuario']['contra'] != $this->request->data['Usuario']['recontra']) {
                $this->Session->incorrecto("Las contraseñas no coinciden.");
            } else {
                if ($this->Usuario->save($this->request->data, false)) {
                    $this->Session->correcto("Contraseña cambiada correctamente", 'default', array('class' => 'success'));
                    $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->incorrecto("No se pudo cambiar la contraseña", 'default', array('class' => 'error'));
                    pr($this->Usuario->invalidFields());
                }
            }
        }
        $this->Usuario->id = $id_usuario;
        if (!$this->Usuario->exists()) {
            throw new NotFoundException('El usuario no es valido');
        }
        $this->set('data', $this->Usuario->read());
    }

}
