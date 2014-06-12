<?php
App::uses('NoticiasController', 'Controller');

/**
 * NoticiasController Test Case
 *
 */
class NoticiasControllerTest extends ControllerTestCase {

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = array(
        'app.noticia'
    );

    /**
     * testListado method
     *
     * @return void
     */
    public function testListado() {
        $datos = $this->testAction( '/noticias/listado' );
        $this->assertNotEqual( count( $datos ), 0 );
        if( count( $datos ) > 0 ) {
            foreach( $datos as $noticia ) {
                $this->assertArrayHasKey( 'Noticia', $noticia );
                $this->assertArrayHasKey( 'id_noticia', $noticia['Noticia'] );
                $this->assertArrayHasKey( 'titulo', $noticia['Noticia'] );
                $this->assertArrayHasKey( 'contenido', $noticia['Noticia'] );
                $this->assertArrayHasKey( 'fecha', $noticia['Noticia'] );
            }
        }
    }

    /**
     * testIndex method
     *
     * @return void
     */
    public function testIndex() {
        $this->testAction( '/noticias' );
        $this->assertArrayHasKey( 'noticias', $this->vars );
        if( count( $this->vars['noticias'] ) > 0 ) {
            foreach( $this->vars['noticias'] as $noticia ) {
                $this->assertArrayHasKey( 'Noticia', $noticia );
                $this->assertArrayHasKey( 'id_noticia', $noticia['Noticia'] );
                $this->assertArrayHasKey( 'titulo', $noticia['Noticia'] );
            }
        }
    }
    
    /**
     * @expectedException NotFoundException
     * @expectedExceptionMessage Noticia invalida
     */
    public function testView() {
        $this->testAction( '/noticias/view/-1' );
    }
    
    public function testViewCorrect() {
        $this->testAction( '/noticias/view/1' );
        $this->assertArrayHasKey( 'noticia', $this->vars );
    }
    
    public function testAdminIndex() {
        $this->testAction( '/administracion/noticias/index' );
    }

}
