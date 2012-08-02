<?php
App::uses('Calle', 'Model');

/**
 * Calle Test Case
 *
 */
class CalleTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.calle');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Calle = ClassRegistry::init('Calle');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Calle);

		parent::tearDown();
	}

}
