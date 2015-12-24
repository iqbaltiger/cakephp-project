<?php
App::uses('AppModel', 'Model');
/**
 * Department Model
 *
 * @property CompanyInfos $CompanyInfos
 */
class Department extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'department_name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $hasMany = array(
		'CompanyInfos' => array(
			'className' => 'CompanyInfos',
			'foreignKey' => 'company_infos_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
        
        
        
       public $hasOne = array(
		'Profile' => array(
			'className' => 'Profile',
			'foreignKey' => 'department_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
        
}
