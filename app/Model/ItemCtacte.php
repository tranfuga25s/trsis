<?php
App::uses('AppModel', 'Model');
/**
 * ItemCtacte Model
 *
 */
class ItemCtacte extends AppModel {
	/**
	 * Use database config
	 *
	 * @var string
	 */
	public $useDbConfig = 'gestotux';
	/**
	 * Use table
	 *
	 * @var mixed False or table name
	 */
	public $useTable = 'item_ctacte';
	/**
	 * Primary key field
	 *
	 * @var string
	 */
	public $primaryKey = 'id_op_ctacte';
	/**
	 * Display field
	 *
	 * @var string
	 */
	public $displayField = 'descripcion';
	
	public $belongsTo = array( 'Ctacte' => array( 'className' => 'Ctacte', 'foreignKey' => 'id_ctacte' ) );
	
}
