<?php

/**
 * CtacteFixture
 *
 */
class CtacteFixture extends CakeTestFixture {

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'ctacte';

    /**
     * Fields
     *
     * @var array
     */
    public $fields = array(
        'numero_cuenta' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20, 'key' => 'primary'),
        'id_cliente' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20, 'key' => 'index'),
        'fecha_alta' => array('type' => 'date', 'null' => false, 'default' => NULL),
        'fecha_baja' => array('type' => 'date', 'null' => true, 'default' => NULL),
        'saldo' => array('type' => 'float', 'null' => true, 'default' => NULL),
        'limite' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '20,4'),
        'suspendida' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
        'indexes' => array('PRIMARY' => array('column' => 'numero_cuenta', 'unique' => 1), 'ctacte_cliente_fk' => array('column' => 'id_cliente', 'unique' => 0)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_spanish_ci', 'engine' => 'InnoDB')
    );

    /**
     * Records
     *
     * @var array
     */
    public $records = array(
        array(
            'numero_cuenta' => 1,
            'id_cliente' => 1,
            'fecha_alta' => '2012-10-14',
            'fecha_baja' => '2012-10-14',
            'saldo' => -1.0,
            'limite' => 1100.0,
            'suspendida' => false
        ),
    );

}
