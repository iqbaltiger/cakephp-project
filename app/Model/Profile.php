<?php
App::uses('AppModel', 'Model');
App::uses('Folder', 'Utility');
App::uses('File', 'Utility');
/**
 * Profile Model
 *
 * @property User $User
 * @property Designation $Designation
 * @property Departments $Departments
 * @property CompanyInfos $CompanyInfos
 */
class Profile extends AppModel {

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
		'id' => array(
			'uuid' => array(
				'rule' => array('uuid'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
            
            'image'=>array(
			'rule'=>array('extension',array('jpg','JPG','jpeg','JPEG','gif','GIF','png','PNG')),
			'message'=>'Insert valid image extension ("jpg","jpeg","gif","png").',
			'allowEmpty' => true,
		),
		
            
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Designation' => array(
			'className' => 'Designation',
			'foreignKey' => 'designation_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Department' => array(
			'className' => 'Departments',
			'foreignKey' => 'departments_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'CompanyInfos' => array(
			'className' => 'CompanyInfos',
			'foreignKey' => 'company_infos_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
        
        
        function deleteContentImage($id){
		$image = $this->field('image',array('Profile.id'=>$id));
		$dir = WWW_ROOT.$image;
		if(file_exists($dir)){
			unlink($dir);
		}
		$this->updateAll(array('profile.image'=>'""'),array('Profile.id'=>$id),false);
	}

	function beforeDelete($cascade = true){
		$id = $this->id;
		$this->deleteContentImage($id);
	}
	
        
        
        
        
        
}
