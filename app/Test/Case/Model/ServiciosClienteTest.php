<?php
/* ServiciosCliente Test cases generated on: 2012-05-22 15:20:59 : 1337710859*/
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

}
