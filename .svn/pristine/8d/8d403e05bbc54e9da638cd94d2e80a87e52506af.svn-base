<?php
App::uses('CompanyInfo', 'Model');

/**
 * CompanyInfo Test Case
 *
 */
class CompanyInfoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.company_info',
		'app.role',
		'app.authorized_menu',
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
		$this->CompanyInfo = ClassRegistry::init('CompanyInfo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CompanyInfo);

		parent::tearDown();
	}

}
