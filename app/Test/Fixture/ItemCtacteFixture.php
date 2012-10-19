<?php
/**
 * ItemCtacteFixture
 *
 */
class ItemCtacteFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'item_ctacte';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id_op_ctacte' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 6, 'key' => 'primary'),
		'fecha' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'id_referencia' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20),
		'tipo_op' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 6),
		'descripcion' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'debe' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '12,3'),
		'haber' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '12,3'),
		'id_ctacte' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20, 'key' => 'index'),
		'numero_comprobante' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'indexes' => array('PRIMARY' => array('column' => 'id_op_ctacte', 'unique' => 1), 'item_ctacte_ctacte_fk' => array('column' => 'id_ctacte', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_spanish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id_op_ctacte' => 1,
			'fecha' => '2012-10-14 18:08:41',
			'id_referencia' => 1,
			'tipo_op' => 1,
			'descripcion' => 'Lorem ipsum dolor sit amet',
			'debe' => 1,
			'haber' => 1,
			'id_ctacte' => 1,
			'numero_comprobante' => 'Lorem ipsum dolor sit amet'
		),
	);
}
