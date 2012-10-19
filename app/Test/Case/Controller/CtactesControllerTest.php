<?php
App::uses('CtactesController', 'Controller');

/**
 * TestCtactesController *
 */
class TestCtactesController extends CtactesController {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * CtactesController Test Case
 *
 */
class CtactesControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.ctacte', 'app.item', 'app.item_ctacte');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Ctactes = new TestCtactesController();
		$this->Ctactes->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ctactes);

		parent::tearDown();
	}

}
