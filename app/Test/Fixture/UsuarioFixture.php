<?php
/* Usuario Fixture generated on: 2012-05-22 15:36:31 : 1337711791 */

/**
 * UsuarioFixture
 *
 */
class UsuarioFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id_usuario' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'contra' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'charset' => 'utf8'),
		'ultimo_acceso' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'ultimo_backup' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => 'id_usuario', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_spanish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id_usuario' => 1,
			'contra' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'ultimo_acceso' => '2012-05-22 15:36:31',
			'ultimo_backup' => '2012-05-22 15:36:31'
		),
	);
}
