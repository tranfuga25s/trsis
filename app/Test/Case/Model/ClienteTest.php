<?php

App::uses('Cliente', 'Model');

/**
 * Cliente Test Case
 *
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

}
