<?php

App::uses('AppModel', 'Model');

/**
 * ServicioBackupUsuario Model
 *
 */
class ServicioBackupUsuario extends AppModel {

    /**
     * Use table
     *
     * @var mixed False or table name
     */
    public $useTable = 'servicio_backup_usuario';

    /**
     * Primary key field
     *
     * @var string
     */
    public $primaryKey = 'id_servicio_backup';
    public $belongsTo = array(
        'ServicioBackup' => array(
            'className' => 'ServicioBackup',
            'foreignKey' => 'id_servicio_backup')
    );

    /**
     * Devuelve el codigo para un ID de usuario predeterminado
     * @param integer $id_usuario
     * @return string
     */
    public function buscarCodigo( $id_usuario = null ) {
        if (is_null($id_usuario) || intval($id_usuario <= 0)) {
            return false;
        }
        $d = $this->find('first', array(
            'conditions' => array(
                'id_usuario' => $id_usuario
            ),
            'recursive' => -1,
            'fields' => array( 'codigo' ) )
        );
        if ( count($d) > 0 && array_key_exists($this->alias, $d)) {
            return md5( $d['ServicioBackupUsuario']['codigo'] );
        }
        return false;
    }

    /**
     * 
     * @param type $id_usuario
     * @return array
     */
    public function buscarIdServicioBackup($id_usuario) {
        $d = $this->find( 'first', array(
                'conditions' => array( 'ServicioBackupUsuario.id_usuario' => $id_usuario ),
                'fields' => array( 'id_servicio_backup' ),
                'recursive' => 1)
        );
        return intval( current( current( $d ) ) );
    }

    /**
     * 
     * @param type $id_usuario
     * @param type $id_servicio_backup
     * @return boolean
     */
    public function verificarRelacionUsuario($id_usuario, $id_servicio_backup) {
        if ($id_usuario == null || $id_servicio_backup == null) {
            return true;
        }

        $d = $this->find('count', array(
            'conditions' => array(
                'id_usuario' => $id_usuario,
                'id_servicio_backup' => $id_servicio_backup
            ),
            'recursive' => -1
        ));
        if ($d > 0) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * 
     * @param type $num_cliente
     * @param type $cantidad
     * @param type $tam
     * @param type $id_servicio
     */
    public function actualizarUso($num_cliente, $cantidad, $tam, $id_servicio) {
        $data = $this->find('first', array('conditions' => array('id_usuario' => $num_cliente, 'id_servicio_backup' => $id_servicio), 'recursive' => -1));
        $this->updateAll(array('cantidad' => $data['ServicioBackupUsuario']['cantidad'] + $cantidad,
            'espacio' => $data['ServicioBackupUsuario']['espacio'] + $tam), array('`ServicioBackupUsuario`.`id_usuario`' => $num_cliente, '`ServicioBackupUsuario`.`id_servicio_backup`' => $id_servicio));
    }

}
