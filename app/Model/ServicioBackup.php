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
	
	public function idPorServicio( $id )
	{
		return $this->find( 'first', array( 'conditions' => array( 'id_servicio' => $id ), 'fields' => array( 'id_servicio_backup' ), 'recursive' => -1 ) );
	}
}
