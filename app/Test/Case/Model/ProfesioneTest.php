<?php
App::uses('Profesione', 'Model');

/**
 * Profesione Test Case
 *
 */
class ProfesioneTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.profesione');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Profesione = ClassRegistry::init('Profesione');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Profesione);

		parent::tearDown();
	}

}
