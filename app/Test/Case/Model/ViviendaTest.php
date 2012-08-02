<?php
App::uses('Vivienda', 'Model');

/**
 * Vivienda Test Case
 *
 */
class ViviendaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.vivienda',
		'app.calle'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Vivienda = ClassRegistry::init('Vivienda');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Vivienda);

		parent::tearDown();
	}

}
