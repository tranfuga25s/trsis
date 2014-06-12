<?php

App::uses('Noticia', 'Model');

/**
 * Noticia Test Case
 *
 */
class NoticiaTestCase extends CakeTestCase {

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = array('app.noticia');

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp() {
        parent::setUp();

        $this->Noticia = ClassRegistry::init('Noticia');
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown() {
        unset($this->Noticia);

        parent::tearDown();
    }

    /**
     * testTituloRepetido
     * @return void
     */
    public function testTituloRepetido() {
        $data = $this->Noticia->find('first');
        $this->Noticia->create();
        unset($data[$this->Noticia->alias][$this->Noticia->primaryKey]);
        $resultado = $this->Noticia->save($data);
        $this->assertEqual($resultado, false);
    }
    
    public function testValidaciones() {
        $data = array(
          'Noticia' => array(
                'titulo' => '',
                'contenido' => '',
                'publicada' => '',
                'fecha' => ''
          )  
        );
        $this->assertEqual( $this->Noticia->save( $data ), false, "No debería de poder guardarse el registro" );
        $this->assertArrayHasKey( 'titulo', $this->Noticia->validationErrors );
        $this->assertArrayHasKey( 'contenido', $this->Noticia->validationErrors );
        $this->assertArrayHasKey( 'publicada', $this->Noticia->validationErrors );
        $this->assertArrayHasKey( 'fecha', $this->Noticia->validationErrors );
    }

}
