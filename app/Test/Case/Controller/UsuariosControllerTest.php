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
        'app.usuario',
        'app.cliente'
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
        $data = array( 'Usuario' => array( 'email' => 'admin@admin.com', 'contra' => '123456' ) );
        $this->testAction( '/administracion/usuarios/add', array( 'method' => 'POST', 'data' => $data ) );
        $this->assertContains( '/administracion/usuarios', $this->headers['Location'] );
        
        $this->testAction( '/administracion/usuarios/add', array( 'method' => 'POST' ) );
    }

    /**
     * testAdministracionEdit method
     *
     * @return void
     */
    public function testAdministracionEdit() {
        $data = array( 'Usuario' => array( 'id_usuario' => '1', 'email' => 'admin@admin.com', 'contra' => '123456' ) );
        $this->testAction( '/administracion/usuarios/edit/1', array( 'method' => 'POST', 'data' => $data ) );
        $this->assertContains( '/administracion/usuarios', $this->headers['Location'] );
        
        $this->testAction( '/administracion/usuarios/edit/1', array( 'method' => 'POST' ) );
    }
    
    /**
     * @expectedException NotFoundException
     */
    public function testAdministracionEditInvalido() {
        $this->testAction( '/administracion/usuarios/edit' );
    }

    /**
     * testAdministracionDeleteInvalido method
     * @expectedException NotFoundException
     * @return void
     */
    public function testAdministracionDeleteInvalido() {
        $this->testAction( '/administracion/usuarios/delete' );
    }
    
    /**
     * testAdministracionDeleteMetodoInvalido method
     * @expectedException MethodNotAllowedException
     * @return void
     */
    public function testAdministracionDeleteMetodoInvalido() {
        $this->testAction( '/administracion/usuarios/delete', array( 'method' => 'GET') );
    }
    
    /**
     * testAdministracionDeleteMetodoInvalido method
     */
    public function testAdministracionDelete() {
        $this->testAction( '/administracion/usuarios/delete/1', array( 'method' => 'POST') );
        $this->assertContains( '/administracion/usuarios', $this->headers['Location'] );
    }
    
    /**
     * testAdministracionCambiarContra method
     *
     * @return void
     */
    public function testAdministracionCambiarContra() {
        
    }

}
