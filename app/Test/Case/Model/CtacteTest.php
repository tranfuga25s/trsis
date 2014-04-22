<?php
App::uses('Ctacte', 'Model');

/**
 * Ctacte Test Case
 *
 */
class CtacteTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.ctacte', 'app.item_ctacte');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Ctacte = ClassRegistry::init('Ctacte');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ctacte);

		parent::tearDown();
	}

    public function testA() { $this->assertEqual( true, true ); }

}
