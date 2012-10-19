<?php
App::uses('AppModel', 'Model');
/**
 * Servicio Model
 *
 * @property  $
 * @property Recargo $Recargo
 * @property Cliente $Cliente
 */
class Servicio extends AppModel {
/**
 * Use database config
 *
 * @var string
 */
	public $useDbConfig = 'gestotux';
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'id_servicio';
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre';

/**
 * hasMany associations
 *
 * @var array
 */
	/*public $hasMany = array(
		'Recargo' => array(
			'className' => 'Recargo',
			'foreignKey' => 'id_servicio'
		)
	);*/


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasMany = array( 'ServiciosCliente' );
}
