<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	
	public $components = array(
		'Session',
		'PermissionCheck',
		'Auth' => array(
			'loginAction'=>array('controller'=>'users','action'=>'login'),
			'loginRedirect' => array('controller' => 'pages', 'action' => 'index'),
			'logoutRedirect' => array('controller' => 'pages', 'action' => 'login'),
			'authorize' => array('Controller') // Added this line
		)
	);
        
        public $uses = array('Profile');
	
	public function beforeFilter(){
		$this->layout = 'admin';
		$this->getAdminMenu();
	}
        
        
          function uploadValidImage($model,$field,$path,$size=array()){
                $data = $this->request->data;
                
                
                
		$valid_ext = $this->$model->validate[$field]['rule']['1'];
            
                
		if($data[$model][$field]['size']>0){
			
			// Delete Previous image if exist
			if(array_key_exists('pre_'.$field, $data[$model])){
				$this->$model->deletePreviousImage($data[$model]['pre_'.$field]);
			}

			$pathinfo = pathinfo($data[$model][$field]['name']);
			if(in_array($pathinfo['extension'], $valid_ext)){
				$config = array(
					'id'=>$model.'_'.$field,
					'file'=>$data[$model][$field],
					'path'=>$path,
					'resize'=>$size
				);
				$this->request->data[$model][$field] = $this->ImageUploader->uploadImage($config);
			}else{
				$this->request->data[$model][$field]=$data[$model][$field]['name'];
				//$this->request->data['Content']['image']=$data['Content']['image']['name'];
			}
			
			
			
		}elseif($data[$model][$field]['error']==1){
			$this->request->data[$model][$field] = 'error.error';
			$this->$model->validate[$field]['message'] = 'This is error file. Upload another file';
		}else{
			$this->request->data[$model][$field] = $data[$model]['pre_'.$field];
		}
    }
        
        
        
	
	
	public function isAuthorized($user = null) {
		$this->getAdminMenu();
		$this->set('role_id',$user['role_id']);
		
		$canAccess = $this->PermissionCheck->checkPermission($user,$controller = $this->params['controller'],$action = $this->params['action']);

		if($this->Session->read('permission_list')){
			$this->set('permission_list', $this->Session->read('permission_list'));
		}
		if($canAccess){
			return true;
		}else{
			if($this->request->is('ajax')){
				$this->layout = false;
				echo $html = '<div class="alert alert-danger" style="display:block;">You are not Authorized Persion for this Action. <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button></div>';
				exit;
			}else{
				$this->Session->setFlash(__('You are not Authorized Persion for this Action. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
				$this->redirect($this->referer());
			}
		}
	}

	private function getAdminMenu(){
		$admin_menu_data = array();
		if($this->Session->read('admin_menu_data')){
			$admin_menu_data = $this->Session->read('admin_menu_data'); //set menu data from session
		}else {
			ClassRegistry::init('AuthorizedMenu')->contain(array('Dominion','Process'));
			$admin_menu_data = ClassRegistry::init('AuthorizedMenu')->find(
					'threaded',
					array(
							'recursive'=>-1,
							'conditions'=>array(
									'AuthorizedMenu.status' => 'active'
							),
							'order'=>array('AuthorizedMenu.position ASC')
					)
			);
			
			//$this->Session->write('admin_menu_data', $admin_menu_data);
		}
		//pr($admin_menu_data);
		//exit;
		$this->set('admin_menu_data',$admin_menu_data);
	}
}
