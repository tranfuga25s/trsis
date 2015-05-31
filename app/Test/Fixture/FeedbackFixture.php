<?php

/**
 * FeedbackFixture
 *
 */
class FeedbackFixture extends CakeTestFixture {

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'feedbacks';

    /**
     * Fields
     *
     * @var array
     */
    public $fields = array(
        'id_feedback' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
        'cliente' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_spanish2_ci', 'charset' => 'utf8'),
        'fecha' => array('type' => 'datetime', 'null' => false, 'default' => null),
        'contenido' => array('type' => 'binary', 'null' => false, 'default' => null),
        'indexes' => array(
            'PRIMARY' => array('column' => 'id_feedback', 'unique' => 1)
        ),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_spanish2_ci', 'engine' => 'MyISAM')
    );

    /**
     * Records
     *
     * @var array
     */
    public $records = array(
        array(
            'id_feedback' => 1,
            'cliente' => 'Lorem ipsum dolor sit amet',
            'fecha' => '2015-05-31 16:10:54',
            'contenido' => 'Lorem ipsum dolor sit amet'
        ),
        array(
            'id_feedback' => 2,
            'cliente' => 'Lorem ipsum dolor sit amet',
            'fecha' => '2015-05-31 16:10:54',
            'contenido' => 'Lorem ipsum dolor sit amet'
        ),
        array(
            'id_feedback' => 3,
            'cliente' => 'Lorem ipsum dolor sit amet',
            'fecha' => '2015-05-31 16:10:54',
            'contenido' => 'Lorem ipsum dolor sit amet'
        ),
        array(
            'id_feedback' => 4,
            'cliente' => 'Lorem ipsum dolor sit amet',
            'fecha' => '2015-05-31 16:10:54',
            'contenido' => 'Lorem ipsum dolor sit amet'
        ),
        array(
            'id_feedback' => 5,
            'cliente' => 'Lorem ipsum dolor sit amet',
            'fecha' => '2015-05-31 16:10:54',
            'contenido' => 'Lorem ipsum dolor sit amet'
        ),
        array(
            'id_feedback' => 6,
            'cliente' => 'Lorem ipsum dolor sit amet',
            'fecha' => '2015-05-31 16:10:54',
            'contenido' => 'Lorem ipsum dolor sit amet'
        ),
        array(
            'id_feedback' => 7,
            'cliente' => 'Lorem ipsum dolor sit amet',
            'fecha' => '2015-05-31 16:10:54',
            'contenido' => 'Lorem ipsum dolor sit amet'
        ),
        array(
            'id_feedback' => 8,
            'cliente' => 'Lorem ipsum dolor sit amet',
            'fecha' => '2015-05-31 16:10:54',
            'contenido' => 'Lorem ipsum dolor sit amet'
        ),
        array(
            'id_feedback' => 9,
            'cliente' => 'Lorem ipsum dolor sit amet',
            'fecha' => '2015-05-31 16:10:54',
            'contenido' => 'Lorem ipsum dolor sit amet'
        ),
        array(
            'id_feedback' => 10,
            'cliente' => 'Lorem ipsum dolor sit amet',
            'fecha' => '2015-05-31 16:10:54',
            'contenido' => 'Lorem ipsum dolor sit amet'
        ),
    );

}
