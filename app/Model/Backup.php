<?php

App::uses('AppModel', 'Model');

/**
 * Backup Model
 *
 * @property ServicioBackup $ServicioBackup
 * @property Usuario $Usuario
 */
class Backup extends AppModel {

    /**
     * Use table
     *
     * @var mixed False or table name
     */
    public $useTable = 'backup';

    /**
     * Primary key field
     *
     * @var string
     */
    public $primaryKey = 'id_backup';
    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
        'ServicioBackup' => array(
            'className' => 'ServicioBackup',
            'foreignKey' => 'servicio_backup_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Usuario' => array(
            'className' => 'Usuario',
            'foreignKey' => 'usuario_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

}
