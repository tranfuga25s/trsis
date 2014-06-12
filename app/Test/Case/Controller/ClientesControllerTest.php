<?php
App::uses('ClientesController', 'Controller');

/**
 * ClientesController Test Case
 *
 */
class ClientesControllerTest extends ControllerTestCase {

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
        'app.servicio',
        'app.usuario'
    );

    /**
     * testUsar method
     * @expectedException NotFoundException
     * @return void
     */
    public function testUsarSinParametro() {
        $this->testAction( '/clientes/usar' );
    }
    
    public function testUsarParametroBackup() {
        $this->testAction( '/clientes/usar/backup' );
    }
    
    public function testUsarParametroEstadisticas() {
        $this->testAction( '/clientes/usar/estadisticas' );
    }

    /**
     * testInicio method
     *
     * @return void
     */
    public function testInicio() {
        $this->controller = $this->generate( 'Clientes', array(
            'components' => array(
                'Auth' => array( 'user' )
            )
        ) );
        $this->controller->Auth
             ->staticExpects( $this->any() )
             ->method('user')
             ->will($this->returnValue(
                     array( 'Usuario' => array( 'id_usuario' => 1, 'username' => 1 ) )
             ));
        $this->testAction( '/clientes/inicio' );
        $this->assertArrayHasKey( 'datos', $this->vars );
        //$this->assertArrayHasKey( 'Cliente', $this->vars['datos'] );
        $this->assertArrayHasKey( 'Usuario', $this->vars['datos'] );
        $this->assertArrayHasKey( 'servicios', $this->vars );
    }

}
