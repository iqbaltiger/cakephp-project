<?php
App::uses('AuthorizedMenu', 'Model');

/**
 * AuthorizedMenu Test Case
 *
 */
class AuthorizedMenuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.authorized_menu',
		'app.role',
		'app.company_info',
		'app.permission',
		'app.dominion',
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
		$this->AuthorizedMenu = ClassRegistry::init('AuthorizedMenu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AuthorizedMenu);

		parent::tearDown();
	}

}
