<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property RequestHandlerComponent $RequestHandler
 */
class UsersController extends AppController {

/**
 * Helpers
 *
 * @var array
 */
    
        public $uses = array('Task', 'User','Profile','Designation','departments','TaskAssign');
    
    
	public $helpers = array('Text');
        
       
	
	public function beforeFilter() {
		$this->layout = 'admin';
		$this->Auth->allow('login','logout');
                
                $sizes = array('1' => 'Active', '2' => 'Inactive');
                
                $this->set('selectActOrInactive',$sizes);
	}

/**
 * Components
 *
 * @var array
 */
	 public $components = array('Paginator', 'RequestHandler','Uploader','ImageUploader');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
//                pr($this->User->find('first', $options));
//                exit;
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
                    
                    $this->uploadValidImage('Profile','image','img/frontend/profile');
                    
			$this->User->create();
//                        pr($this->request->data);
//                        exit;
			if ($this->User->saveAssociated($this->request->data)) {
				$last_insert_id = $this->User->getLastInsertID();
								$this->Session->setFlash(__('The user has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'view',$last_insert_id));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
			}
		}
                
                 $designations = $this->User->Profile->Designation->find('list');
		
                
                    $this->set(compact('designations'));
                
		$roles = $this->User->Role->find('list');
		$this->set(compact('roles'));
                
                $departments = $this->User->Profile->Department->find('list');
		
                
                    $this->set(compact('departments'));
                
                
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
                    
                    
                    
                 $this->uploadValidImage('Profile','image','img/frontend/profile');
                    
                    
                    
                    //$this->User->id=$id;
			if ($this->User->saveAssociated($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'view',$id));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
                        
                       // pr($this->User->find('first', $options));
			$this->request->data = $this->User->find('first', $options);
                        
                       
                        
		}
		$roles = $this->User->Role->find('list');
		$this->set(compact('roles'));
               
                $designations = $this->User->Profile->Designation->find('list');
		//pr($designations);exit;
                
                    $this->set(compact('designations'));
                    
                       $departments = $this->User->Profile->Department->find('list');
		
                
                    $this->set(compact('departments'));
                
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
		}
		return $this->redirect(array('action' => 'index'));
	}
        
        
        
        public function regulartask() {
            
            
            
            
        }




      
        public function notification(){
            
            $this->loadModel('Task');
             $uid = CakeSession::read("Auth.User.id");
            
//            $conditions = array(
//    'conditions' => array('TaskAssign.user_id' => $uid,'notification_status'=>0));
             
               $conditions = array(
    'conditions' => array('TaskAssign.user_id' => $uid));
            
            
//            $notification_list = $this->Task->TaskAssign->findAllByNotificationStatus('0');
            
            $notification_list = $this->TaskAssign->find('all', $conditions);
            
            
            
          //  pr($notification_list); exit;
            $this->set('notification_list',$notification_list);
        }
        


      public function visitednotification($id=null){
          
         // echo $id;
           $this->loadModel('TaskAssign');
           $this->TaskAssign->id=$id ;
          $this->TaskAssign->saveField('notification_status',1);
          
           $task_id = $this->TaskAssign->field('task_id', array('id' => $id));
         
       $task_details = $this->Task->findAllById($task_id);
       
       
      // $user = $this->Task->findAllById($task_id);
       
       //pr($task_details);
     
           //$this->set('test','testssss');
           $this->set('task_detail',$task_details);
          //$taskDetails = $this->
          
//          $this->TaskAssign->updateAll(
//          array('notification_status' => 1),
//          array('id' => $id)
//          );
          
           
          
      }



        public function login(){
		$this->layout = 'login';
		if($this->request->is('post')){
			if($this->Auth->login()){
				return $this->redirect($this->Auth->redirect());
			}else{
				$this->Session->setFlash(__('Invalid Usename or Password . <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
			}
		}
	}
	
	public function logout() {
		$this->redirect($this->Auth->logout());
	}
}
