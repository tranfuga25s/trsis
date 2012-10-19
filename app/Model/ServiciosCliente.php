<?php
App::uses('AppModel', 'Model');
/**
 * ServiciosCliente Model
 *
 */
class ServiciosCliente extends AppModel {
	/**
	 * Use database config
	 *
	 * @var string
	 */
	public $useDbConfig = 'gestotux';
	
	var $belongsTo = array( 
		'Servicio' => array(
			'className' => 'Servicio',
			'foreignKey' => 'id_servicio'
			),
		 'Cliente' => array(
		 	'className' => 'Cliente',
		 	'foreignKey' => 'id_cliente'
		 ) );
}
?>