<?php
/* Cliente Fixture generated on: 2012-05-22 14:52:23 : 1337709143 */

/**
 * ClienteFixture
 *
 */
class ClienteFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'razon_social' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'charset' => 'utf8'),
		'nombre' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'charset' => 'utf8'),
		'apellido' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'charset' => 'utf8'),
		'calle' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'charset' => 'utf8'),
		'numero' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 2, 'collate' => NULL, 'comment' => ''),
		'piso' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 2, 'collate' => NULL, 'comment' => ''),
		'depto' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'charset' => 'utf8'),
		'ciudad' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'charset' => 'utf8'),
		'codigo_postal' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'charset' => 'utf8'),
		'provincia' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 20, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
		'pais' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 20, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
		'tel_fijo' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'charset' => 'utf8'),
		'tel_celular' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'charset' => 'utf8'),
		'fax' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'charset' => 'utf8'),
		'email' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'charset' => 'utf8'),
		'comprobante_email' => array('type' => 'boolean', 'null' => true, 'default' => '1', 'collate' => NULL, 'comment' => ''),
		'ctacte' => array('type' => 'boolean', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'CUIT/CUIL' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'charset' => 'utf8'),
		'id_estado_fiscal' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'pais_fk' => array('column' => 'pais', 'unique' => 0), 'provincia_fk' => array('column' => 'provincia', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_spanish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'razon_social' => 'Lorem ipsum dolor sit amet',
			'nombre' => 'Lorem ipsum dolor sit amet',
			'apellido' => 'Lorem ipsum dolor sit amet',
			'calle' => 'Lorem ipsum dolor sit amet',
			'numero' => 1,
			'piso' => 1,
			'depto' => 'Lorem ipsum dolor sit amet',
			'ciudad' => 'Lorem ipsum dolor sit amet',
			'codigo_postal' => 'Lorem ipsum dolor sit amet',
			'provincia' => 1,
			'pais' => 1,
			'tel_fijo' => 'Lorem ipsum dolor sit amet',
			'tel_celular' => 'Lorem ipsum dolor sit amet',
			'fax' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'comprobante_email' => 1,
			'ctacte' => 1,
			'CUIT/CUIL' => 'Lorem ipsum dolor sit amet',
			'id_estado_fiscal' => 1
		),
	);
}
