<?php
/* ServicioBackupUsuario Test cases generated on: 2012-05-23 21:17:25 : 1337818645*/
App::uses('ServicioBackupUsuario', 'Model');

/**
 * ServicioBackupUsuario Test Case
 *
 */
class ServicioBackupUsuarioTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.servicio_backup_usuario');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->ServicioBackupUsuario = ClassRegistry::init('ServicioBackupUsuario');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ServicioBackupUsuario);

		parent::tearDown();
	}

    public function testA() { $this->assertEqual( true, true ); }

}
