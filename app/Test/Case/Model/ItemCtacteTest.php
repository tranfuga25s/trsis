<?php
App::uses('ItemCtacte', 'Model');

/**
 * ItemCtacte Test Case
 *
 */
class ItemCtacteTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.item_ctacte');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ItemCtacte = ClassRegistry::init('ItemCtacte');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ItemCtacte);

		parent::tearDown();
	}

    public function testA() { $this->assertEqual( true, true ); }

}
