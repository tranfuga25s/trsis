<?php
/**
 * ServicioBackupUsuarioFixture
 *
 */
class ServicioBackupUsuarioFixture extends CakeTestFixture {

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'servicio_backup_usuario';

    /**
     * Fields
     *
     * @var array
     */
    public $fields = array(
        'id_servicio_backup' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
        'id_usuario' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
        'suspendido' => array('type' => 'boolean', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
        'codigo' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'charset' => 'utf8'),
        'indexes' => array('PRIMARY' => array('column' => array('id_servicio_backup', 'id_usuario'), 'unique' => 1), 'id_usuario' => array('column' => 'id_usuario', 'unique' => 0)),
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
            'id_usuario' => 1,
            'suspendido' => 1,
            'codigo' => '123456'
        ),
    );

}
