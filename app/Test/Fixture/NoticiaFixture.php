<?php
/* Noticia Fixture generated on: 2012-08-15 23:27:30 : 1345084050 */

/**
 * NoticiaFixture
 *
 */
class NoticiaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id_noticia' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'titulo' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'charset' => 'utf8'),
		'contenido' => array('type' => 'binary', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'publicada' => array('type' => 'boolean', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'fecha' => array('type' => 'date', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => 'id_noticia', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_spanish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id_noticia' => 1,
			'titulo' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'contenido' => 'Lorem ipsum dolor sit amet',
			'publicada' => 1,
			'fecha' => '2012-08-15'
		),
	);
}
