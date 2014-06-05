<?php
/**
 * ServicioFixture
 *
 */
class ServicioFixture extends CakeTestFixture {

    /**
     * Fields
     *
     * @var array
     */
    public $fields = array(
        'id_servicio' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 1, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
        'nombre' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
        'descripcion' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
        'fecha_alta' => array('type' => 'date', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
        'fecha_baja' => array('type' => 'date', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
        'precio_base' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => '10,3', 'collate' => NULL, 'comment' => ''),
        'periodo' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'collate' => NULL, 'comment' => ''),
        'dia_cobro' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'collate' => NULL, 'comment' => ''),
        'forma_incompleto' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'collate' => NULL, 'comment' => ''),
        'indexes' => array('PRIMARY' => array('column' => 'id_servicio', 'unique' => 1)),
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
            'nombre' => 'Servicio 1',
            'descripcion' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'fecha_alta' => '2012-05-22',
            'fecha_baja' => '2012-05-22',
            'precio_base' => 10.11,
            'periodo' => 1,
            'dia_cobro' => 1,
            'forma_incompleto' => 1
        ),
    );

}
