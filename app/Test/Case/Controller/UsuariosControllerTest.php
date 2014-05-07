<?php

App::uses('UsuariosController', 'Controller');

/**
 * UsuariosController Test Case
 *
 */
class UsuariosControllerTest extends ControllerTestCase {

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = array(
        'app.usuario'
    );

    /**
     * testVerificar method
     *
     * @return void
     */
    public function testVerificar() {
        
    }

    /**
     * testIngresar method
     *
     * @return void
     */
    public function testIngresar() {
        
    }

    /**
     * testRegistrar method
     *
     * @return void
     */
    public function testRegistrar() {
        
    }

    /**
     * testLogout method
     *
     * @return void
     */
    public function testLogout() {
        
    }

    /**
     * testRecordarContra method
     *
     * @return void
     */
    public function testRecordarContra() {
        
    }

    /**
     * testAdministracionIngresaradmin method
     *
     * @return void
     */
    public function testAdministracionIngresaradmin() {
        
    }

    /**
     * testAdministracionSalir method
     *
     * @return void
     */
    public function testAdministracionSalir() {
        
    }

    /**
     * testAdministracionCpanel method
     *
     * @return void
     */
    public function testAdministracionCpanel() {
        
    }

    /**
     * testAdministracionIndex method
     *
     * @return void
     */
    public function testAdministracionIndex() {
        $this->testAction( '/administracion/usuarios/index' );
        $this->assertArrayHasKey( 'usuarios', $this->vars );
    }

    /**
     * testAdministracionView method
     *
     * @return void
     */
    public function testAdministracionView() {
        $this->testAction( '/administracion/usuarios/view/1' );
        $this->assertArrayHasKey( 'usuario', $this->vars );
        $this->assertArrayHasKey( 'Usuario', $this->vars['usuario'] );
        $this->assertArrayHasKey( 'id_usuario', $this->vars['usuario']['Usuario'] );        
    }
    
    /**
     * @expectedException NotFoundException
     */
    public function testAdministracionViewInvalid() {
        $this->testAction( '/administracion/usuarios/view/0' );
    }

    /**
     * testAdministracionAdd method
     *
     * @return void
     */
    public function testAdministracionAdd() {
        $this->testAction( '/administracion/usuarios/index', array( 'method' => 'POST' ) );
    }

    /**
     * testAdministracionEdit method
     *
     * @return void
     */
    public function testAdministracionEdit() {
        
    }

    /**
     * testAdministracionDelete method
     *
     * @return void
     */
    public function testAdministracionDelete() {
        
    }

    /**
     * testAdministracionCambiarContra method
     *
     * @return void
     */
    public function testAdministracionCambiarContra() {
        
    }

}
