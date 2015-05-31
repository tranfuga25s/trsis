<?php
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

    /**
     * 
     */
    public function testCodigoPorUsuarioIncorrecto() {
        $this->assertEqual( $this->ServicioBackupUsuario->buscarCodigo(), false );
        $this->assertEqual( $this->ServicioBackupUsuario->buscarCodigo( 0 ), false );
        $this->assertEqual( $this->ServicioBackupUsuario->buscarCodigo( -1 ), false );
        $this->assertEqual( $this->ServicioBackupUsuario->buscarCodigo( 222 ), false );
    }
    
    /**
     * 
     */
    public function testCodigoPorUsuario() {
        $this->assertEqual( $this->ServicioBackupUsuario->buscarCodigo( 1 ), '123456' );
    }

}
