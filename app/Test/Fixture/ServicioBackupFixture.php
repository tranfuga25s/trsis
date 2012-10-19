<?php
/* ServicioBackup Fixture generated on: 2012-05-22 15:41:56 : 1337712116 */

/**
 * ServicioBackupFixture
 *
 */
class ServicioBackupFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'servicio_backup';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id_servicio_backup' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'id_servicio' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20, 'collate' => NULL, 'comment' => ''),
		'fecha_alta' => array('type' => 'date', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => 'id_servicio_backup', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_spanish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id_servicio_backup' => 1,
			'id_servicio' => 1,
			'fecha_alta' => '2012-05-22'
		),
	);
}
