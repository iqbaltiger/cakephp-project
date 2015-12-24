<?php
App::uses('DepartmentsController', 'Controller');

/**
 * DepartmentsController Test Case
 *
 */
class DepartmentsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.department',
		'app.company_info',
		'app.profile',
		'app.user',
		'app.role',
		'app.authorized_menu',
		'app.dominion',
		'app.permission',
		'app.process',
		'app.designation',
		'app.departments',
		'app.company_infos'
	);

}
