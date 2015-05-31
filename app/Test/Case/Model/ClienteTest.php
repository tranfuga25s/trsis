<?php

App::uses('Cliente', 'Model');

/**
 * Cliente Test Case
 *
 * @property Cliente $Cliente
 */
class ClienteTest extends CakeTestCase {

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = array(
        'app.cliente',
        'app.ctacte',
        'app.item_ctacte',
        'app.servicios_cliente',
        'app.servicio'
    );

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp() {
        parent::setUp();
        $this->Cliente = ClassRegistry::init('Cliente');
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown() {
        unset($this->Cliente);
        parent::tearDown();
    }

    /**
     * testExiste method
     *
     * @return void
     */
    public function testExiste() {
        $this->assertEqual( $this->Cliente->existe( 'emailinvalido@gmail.com' ), false );
        $this->assertEqual( $this->Cliente->existe( 'admin@admin.com' ), true );
    }

    /**
     * testDarDeAlta method
     *
     * @return void
     */
    public function testDarDeAlta() {
        $this->assertEqual( $this->Cliente->darDeAlta( "Test", "email@gmail.com", "telefono", 1 ), true );
        $this->assertNotEqual( $this->Cliente->darDeAlta( null, "email@gmail.com", "telefono", 1 ), true );
        $this->assertNotEqual( $this->Cliente->darDeAlta( "Test", "emailgmail.com", "telefono", 1 ), true );
        $this->assertNotEqual( $this->Cliente->darDeAlta( "Test", "email@gmail.com", null, 1 ), true );
        $this->assertNotEqual( $this->Cliente->darDeAlta( "Test", "email@gmail.com", "telefono", -1 ), true );
    }
    
    /**
     * Bug #19 - Verfica que al eliminar un cliente
     * no se elimine el usuario asociado
     */
    public function testEliminarSinEliminarUsuario() {
        $cliente = $this->Cliente->find('first');
        $this->assertGreaterThan(0, count($cliente));
        $id_cliente = intval($cliente[$this->Cliente->name][$this->Cliente->primaryKey]);
        $this->assertTrue($this->Cliente->exists($id_cliente));
        $id_usuario = intval($cliente[$this->Cliente->Usuario->alias][$this->Cliente->Usuario->primaryKey]);
        $this->assertTrue($this->Cliente->Usuario->exists($id_usuario), "No se encuentra el usuario relacionado con un cliente");
        $this->assertTrue(true, $this->Cliente->delete($id_cliente), "No se pudo eliminar el cliente");
        $this->assertTrue($this->Cliente->Usuario->exists($id_usuario), "Se eliminó el usuario relacionado con un cliente");
    }

}
