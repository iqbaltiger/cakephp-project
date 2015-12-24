<?php
App::uses('AppModel', 'Model');
/**
 * AuthorizedMenu Model
 *
 * @property Role $Role
 * @property AuthorizedMenu $ParentAuthorizedMenu
 * @property Dominion $Dominion
 * @property Process $Process
 * @property AuthorizedMenu $ChildAuthorizedMenu
 */
class AuthorizedMenu extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';
	public $actsAs = array('Containable');
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
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
	public $belongsTo = array(
		'Role' => array(
			'className' => 'Role',
			'foreignKey' => 'role_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ParentAuthorizedMenu' => array(
			'className' => 'AuthorizedMenu',
			'foreignKey' => 'parent_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Dominion' => array(
			'className' => 'Dominion',
			'foreignKey' => 'dominion_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Process' => array(
			'className' => 'Process',
			'foreignKey' => 'process_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'ChildAuthorizedMenu' => array(
			'className' => 'AuthorizedMenu',
			'foreignKey' => 'parent_id',
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
	
	public function getRoleArrayToString($roles){
		$str = '';
		if(!empty($roles)){
			foreach($roles as $role){
				if($role!=0){
					$str .= $role.'|';
				}
			}
			$str = substr($str, 0,-1);
		}

		return $str;
	}

}
