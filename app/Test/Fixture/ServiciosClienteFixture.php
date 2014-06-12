<?php
/**
 * ServiciosClienteFixture
 *
 */
class ServiciosClienteFixture extends CakeTestFixture {

    /**
     * Fields
     *
     * @var array
     */
    public $fields = array(
        'id_servicio' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 1, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
        'id_cliente' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 1, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
        'fecha_alta' => array('type' => 'datetime', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
        'fecha_baja' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
        'indexes' => array('PRIMARY' => array('column' => array('id_servicio', 'id_cliente'), 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_spanish_ci', 'engine' => 'InnoDB')
    );

    /**
     * Records
     *
     * @var array
     */
    public $records = array(
        array(
            'id_servicio' => 1,
            'id_cliente' => 1,
            'fecha_alta' => '2012-05-22 15:20:59',
            'fecha_baja' => '2012-05-22 15:20:59'
        ),
    );

}
