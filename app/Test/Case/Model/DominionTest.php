<?php
App::uses('Dominion', 'Model');

/**
 * Dominion Test Case
 *
 */
class DominionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dominion',
		'app.authorized_menu',
		'app.role',
		'app.company_info',
		'app.permission',
		'app.process',
		'app.user',
		'app.profile'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Dominion = ClassRegistry::init('Dominion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Dominion);

		parent::tearDown();
	}

}
