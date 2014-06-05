<?php
/**
 * BackupFixture
 *
 */
class BackupFixture extends CakeTestFixture {

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'backup';

    /**
     * Fields
     *
     * @var array
     */
    public $fields = array(
        'id_backup' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
        'servicio_backup_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
        'usuario_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
        'fecha' => array('type' => 'datetime', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
        'tamano' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 20, 'collate' => NULL, 'comment' => ''),
        'archivo_db' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'charset' => 'utf8'),
        'archivo_est' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'charset' => 'utf8'),
        'archivo_pref' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'charset' => 'utf8'),
        'indexes' => array('PRIMARY' => array('column' => 'id_backup', 'unique' => 1), 'servicio_backup_id' => array('column' => 'servicio_backup_id', 'unique' => 0), 'usuario_id' => array('column' => 'usuario_id', 'unique' => 0)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_spanish_ci', 'engine' => 'InnoDB')
    );

    /**
     * Records
     *
     * @var array
     */
    public $records = array(
        array(
            'id_backup' => 1,
            'servicio_backup_id' => 1,
            'usuario_id' => 1,
            'fecha' => '2012-05-23 21:52:53',
            'tamano' => 1,
            'archivo_db' => 'Lorem ipsum dolor sit amet',
            'archivo_est' => 'Lorem ipsum dolor sit amet',
            'archivo_pref' => 'Lorem ipsum dolor sit amet'
        ),
    );

}
