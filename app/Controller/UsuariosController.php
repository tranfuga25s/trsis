<?php

class UsuariosController extends AppController {

	var $scaffold;

	public function beforeFilter() {
		//$this->Auth->allow( array( '*'  ) );
		$this->Auth->allow( array( 'ingresar', 'registrar', 'verificar' ) );
	}

	public function verificar()
	{
		$this->autoRender = false;
        if( $this->request->isPost() && isset( $this->request->query['num_cliente'] ) ) {
            $id_usuario = $this->request->query['num_cliente'];
            $contra = $this->request->query['codigo'];
			$this->loadModel( 'Usuario' );
            $this->Usuario->id = $id_usuario;
            if( !$this->Usuario->exists() ) {
				return json_encode( array( 'error' => true, 'texto' => 'El numero de cliente no corresponde a un cliente registrado' ) );
			}
			$this->loadModel( 'ServicioBackupUsuario' );
			$cod = $this->ServicioBackupUsuario->buscarCodigo( $id_usuario );
			if( $cod != $contra ) {
				return json_encode( array( 'error' => true, 'texto' => 'El codigo de seguridad no coincide para su cliente.' ) );
			}
			// Retorno los datos para mostrarlos
			$id_servicio_backup = $this->ServicioBackupUsuario->buscarIdServicioBackup( $id_usuario );
			if( $id_servicio_backup == false ) {
				return json_encode( array( 'error' => true, 'texto' => 'No existe una asociación de su usuario con un servicio de backup' ) );
			}
			$this->loadModel( 'ServicioBackup' );
			$datos = $this->ServicioBackup->read( null, $id_servicio_backup );
			$this->loadModel( 'ServicioBackupUsuario' );
			$temp = $this->ServicioBackupUsuario->find( 'first', array( 'conditions' => array( 'ServicioBackupUsuario.id_servicio_backup' => $id_servicio_backup, 'ServicioBackupUsuario.id_usuario' => $id_usuario ) ) );
			$datos['ServicioBackupUsuario'] = $temp['ServicioBackupUsuario'];
			return json_encode(
                               	array( 	'cantidad' => $datos['ServicioBackupUsuario']['cantidad'],
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
			return json_encode( array( 'error' => true, 'texto' => 'Metodo no soportado' ) );
		}
	}

	public function ingresar()
	{
		if( $this->request->isPost() ) {
			if( $this->Auth->login($this->data) ) {
				$this->redirect( array( 'controller' => 'clientes', 'action' => 'inicio' ) );
			} else {
				$this->Session->setFlash( "Nombre de usuario o codigo incorrecto" );
			}
		} else if( $this->Auth->loggedIn() ) {
			$this->redirect( array( 'controller' => 'clientes', 'action' => 'inicio' ) );
		}
	}

	public function registrar() {
		if( $this->request->isPost() ) {

			$this->loadModel('Cliente');
			if( $this->Cliente->existe( $this->data['Usuario']['email'] ) ) {
				$this->Session->setFlash( 'El email utilizado ya existe como cliente. <br />Por favor, recupere sus datos de ingreso desde la seccion "ya soy cliente"');
				$this->redirect( array( 'action' => 'ingresar' ) );
			}
			$id_cliente = -1;
			if( !$this->Cliente->darDeAlta( $this->data['Usuario']['nombre'], $this->data['Usuario']['email'], $this->data['Usuario']['telefono'], $id_cliente ) ) {
				$this->Session->setFlash( 'No se pudo agregar el cliente necesario' );
				$this->redirect( array( 'action' => 'ingresar' ) );
			}
			$this->data['Usuario']['cliente_id'] = $id_cliente;
			$this->Usuario->create();
			if( !$this->Usuario->save( $this->data ) ) {
				$this->Session->setFlash( 'No se pudo guardar el usuario' );
				$this->redirect( array( 'action' => 'ingresar' ) );
			}
			// Mensaje de bienvenida
			$this->loadModel( 'Aviso' );
			$this->Aviso->bienvenida( $this->data['Usuario']['id_usuario'] );
			// Listo
			$this->Session->setFlash( 'Bienvenido a nuestro sistema' );
			$this->redirect( array( 'controller' => 'clientes', 'action' => 'inicio' ) );
		} else {
			$this->Session->setFlash( 'Metodo de registro desconocido' );
		}
	}

	public function logout() {
		if( $this->Auth->logout() ) {
			$this->redirect( '/' );
		}
	}
}

?>