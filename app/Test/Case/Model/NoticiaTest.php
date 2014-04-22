<?php
/* Noticia Test cases generated on: 2012-08-15 23:27:30 : 1345084050*/
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

}
