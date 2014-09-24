<?php

App::uses('AppModel', 'Model');

/**
 * ServicioBackup Model
 *
 * @property Servicio $Servicio
 */
class ServicioBackup extends AppModel {

    /**
     * Use table
     *
     * @var mixed False or table name
     */
    public $useTable = 'servicio_backup';

    /**
     * Primary key field
     *
     * @var string
     */
    public $primaryKey = 'id_servicio_backup';

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
        'Servicio' => array(
            'className' => 'Servicio',
            'foreignKey' => 'id_servicio'
        )
    );
    
    /**
     *
     * @var array 
     */
    public $hasMany = array(
        'ServicioBackupUsuario' => array(
            'className' => 'ServicioBackupUsuario',
            'foreignKey' => 'id_servicio_backup'
        )
    );

    /**
     * Devuelve el ID de serviciode backup según el ID de servicio pasado como parametro
     * @param type $id ID de servicio
     * @return type 
     */
    public function idPorServicio($id) {
        $this->Servicio->id = $id;
        if( !$this->Servicio->exists() ) {
            throw new NotFoundException( "El servicio buscado no existe!" );
        }
        return $this->find( 'first', array( 'conditions' => array( 'id_servicio' => $id ), 
                                            'fields' => array( 'id_servicio_backup' ), 
                                            'recursive' => -1 )
        );
    }

}
