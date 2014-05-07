<?php

/* Usuario Test cases generated on: 2012-05-22 15:36:32 : 1337711792 */
App::uses('Usuario', 'Model');

/**
 * Usuario Test Case
 *
 */
class UsuarioTestCase extends CakeTestCase {

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = array('app.usuario');

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp() {
        parent::setUp();

        $this->Usuario = ClassRegistry::init('Usuario');
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown() {
        unset($this->Usuario);

        parent::tearDown();
    }

    public function testA() {
        $this->assertEqual(true, true);
    }
    
    /*!
     * Testea que cuando se guarden datos te de una contraesña correcta en la db
     */
    public function testCambiaContrasena() {
        
    }

}
