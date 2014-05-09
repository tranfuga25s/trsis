<?php
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
    public $fixtures = array(
        'app.servicio_backup', 
        'app.servicio', 
        'app.servicios_cliente', 
        'app.cliente'
    );

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

    public function testA() {
        $this->assertEqual(true, true);
    }
    
    public function testBuscarPorId() {
        $data = $this->ServicioBackup->idPorServicio( 1 );
        $this->assertNotEqual( count( $data ), 0 );
        $this->assertArrayHasKey( 'ServicioBackup', $data );
        $this->assertArrayHasKey( $this->ServicioBackup->primaryKey, $data[$this->ServicioBackup->alias] );
        $this->assertArrayNotHasKey( 'fecha_alta', $data[$this->ServicioBackup->alias] );
    }
    
    /**
     * @expectedException NotFoundException
     */
    public function testBuscarPorIdIncorrecto() {
        $this->ServicioBackup->idPorServicio( 2 );
    }

}
