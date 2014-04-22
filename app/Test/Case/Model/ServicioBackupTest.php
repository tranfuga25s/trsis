<?php
/* ServicioBackup Test cases generated on: 2012-05-22 15:41:56 : 1337712116*/
App::uses('ServicioBackup', 'Model');

/**
 * ServicioBackup Test Case
 *
 */
class ServicioBackupTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.servicio_backup', 'app.servicio', 'app.servicios_cliente', 'app.cliente');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->ServicioBackup = ClassRegistry::init('ServicioBackup');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ServicioBackup);

		parent::tearDown();
	}

    public function testA() { $this->assertEqual( true, true ); }

}
