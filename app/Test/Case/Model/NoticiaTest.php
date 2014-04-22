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

    public function testA() { $this->assertEqual( true, true ); }

    /**
     * testTituloRepetido
     * @return void
     */
    public function testTituloRepetido() {
        $data = $this->Noticia->find('first');
        unset( $data[$this->Noticia->alias][$this->Noticia->primaryKey] );
        $this->assertEqual( $this->Noticia->save( $data ), false );
    }

}
