<?php

App::uses('AppModel', 'Model');

/**
 * Usuario Model
 *
 */
class Usuario extends AppModel {

    /**
     * Primary key field
     *
     * @var string
     */
    public $primaryKey = 'id_usuario';
    
    public $belongsTo = array(
      'Cliente' => array(
          'dependent' => false
      )
    );
    
    public $validate = array(
        'email' => array(
            'rule' => array( 'email' ),
            'message' => 'Ingrese un email correcto'
        )
    );

    public function buscarIdUsuario($id_cliente) {
        $t = $this->find('first', array('conditions' => array('cliente_id' => $id_cliente), 'fields' => array('id_usuario'), 'recursive' => -1));
        return $t['Usuario']['id_usuario'];
    }

    public function buscarIdServicioSegunBackup($ids_backup) {
        if ($this->id == null) {
            return false;
        }
        return $this->ServiciosCliente->find('first', array('conditions' =>
                    array('ServiciosCliente.id_cliente' => $this->id,
                        'ServiciosCliente.id_servicio' => $ids_backup),
                    'fields' => array('id_servicio'),
                    'recursive' => -1));
    }

    /* !
     * \fn buscarIdServicioBackup( $id_cliente )
     * Busca el servicio de backup que corresponde al cliente seleccionado
     */

    public function buscarIdServicioBackup($id_cliente) {
        $this->loadModel('ServiciosClientes');
        return $this->ServiciosCliente->find('first', array('conditions' =>
                    array('ServiciosCliente.id_cliente' => $id_cliente),
                    'fields' => array('id_servicio'),
                    'recursive' => -1));
    }

    /* !
     * @fn verificarSiExiste( $email )
     * Verifica que exista el email en la lista de usuarios.
     * @return Verdadero si el email está dado de alta en el sistema
     */

    public function verificarSiExiste($email = null) {
        $cantidad = $this->find('count', array('conditions' => array('email' => $email), 'recursive' => -1 ));
        if ($cantidad > 0) {
            return true;
        } else {
            return false;
        }
    }

    /* !
     * @fn generarNuevaContraseñarray( $email, $contra )
     * Genera una nueva contraseña para el usuario, la coloca en la variable $contra y la asigna al email pasado como referencia.
     * @return Verdadero si el email está dado de alta en el sistema
     */
    public function generarNuevaContraseña($email = null, $contra = null) {
        $str = "ABCDE2FGHIJKLM4NOPQRSTUVWXY2Zabcdefghij5klmnopqrstu2vwxyz1234567890";
        $contra = "";
        for ($i = 0; $i < 8; $i++) {
            $contra .= substr($str, rand(0, 64), 1);
        }
        $id = $this->find('first', array('conditions' => array('Usuario.email' => $email), 'fields' => 'id_usuario', 'recurive' => -1 ) );
        if ($id['Usuario']['id_usuario'] != 0) {
            $this->id = $id['Usuario']['id_usuario'];
            if (!$this->saveField('contra', $contra)) {
                return false;
            } else {
                return $contra;
            }
        } else {
            // No debería de llegar aqui
            echo "El id del usuario no fue encontrado buscando x email. error de logica";
            exit();
        }
        return $contra;
    }

}

?>