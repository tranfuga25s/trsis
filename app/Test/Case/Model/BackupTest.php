<?php
/* Backup Test cases generated on: 2012-05-23 21:52:53 : 1337820773*/
App::uses('Backup', 'Model');

/**
 * Backup Test Case
 *
 */
class BackupTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.backup', 'app.servicio_backup', 'app.servicio', 'app.servicios_cliente', 'app.cliente', 'app.usuario');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Backup = ClassRegistry::init('Backup');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Backup);

		parent::tearDown();
	}

}
