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
        $datos = $this->testAction( '/noticias' );
        if( count( $this->vars['noticias'] ) > 0 ) {
            foreach( $this->vars['noticias'] as $noticia ) {
                $this->assertArrayHasKey( 'Noticia', $noticia );
                $this->assertArrayHasKey( 'id_noticia', $noticia['Noticia'] );
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
     * testView method
     *
     * @return void
     */
    public function testView() {
        
    }

    /**
     * testAdd method
     *
     * @return void
     */
    public function testAdd() {
        
    }

    /**
     * testEdit method
     *
     * @return void
     */
    public function testEdit() {
        
    }

    /**
     * testDelete method
     *
     * @return void
     */
    public function testDelete() {
        
    }

}
