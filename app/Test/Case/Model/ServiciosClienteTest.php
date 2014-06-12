<?php
App::uses('ServiciosCliente', 'Model');

/**
 * ServiciosCliente Test Case
 *
 */
class ServiciosClienteTestCase extends CakeTestCase {

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = array('app.servicios_cliente');

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp() {
        parent::setUp();

        $this->ServiciosCliente = ClassRegistry::init('ServiciosCliente');
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown() {
        unset($this->ServiciosCliente);

        parent::tearDown();
    }

    public function testA() {
        $this->assertEqual(true, true);
    }

}
