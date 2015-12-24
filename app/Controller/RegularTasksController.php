<?php
App::uses('AppController', 'Controller');
/**
 * RegularTasks Controller
 *
 * @property RegularTask $RegularTask
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class RegularTasksController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->RegularTask->recursive = 0;
		$this->set('regularTasks', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->RegularTask->exists($id)) {
			throw new NotFoundException(__('Invalid regular task'));
		}
		$options = array('conditions' => array('RegularTask.' . $this->RegularTask->primaryKey => $id));
		$this->set('regularTask', $this->RegularTask->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RegularTask->create();
                   
                     $data =   $this->request->data();
                        
                      pr($data);
                        
                        
			if ($this->RegularTask->saveMany($this->request->data)) {
                            
                                
                            
				$last_insert_id = $this->RegularTask->getLastInsertID();
								$this->Session->setFlash(__('The regular task has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'view',$last_insert_id));
			} else {
				$this->Session->setFlash(__('The regular task could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$roles = $this->RegularTask->Role->find('list');
		$this->set(compact('roles'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->RegularTask->exists($id)) {
			throw new NotFoundException(__('Invalid regular task'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->RegularTask->save($this->request->data)) {
				$this->Session->setFlash(__('The regular task has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'view',$id));
			} else {
				$this->Session->setFlash(__('The regular task could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('RegularTask.' . $this->RegularTask->primaryKey => $id));
			$this->request->data = $this->RegularTask->find('first', $options);
		}
		$roles = $this->RegularTask->Role->find('list');
		$this->set(compact('roles'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->RegularTask->id = $id;
		if (!$this->RegularTask->exists()) {
			throw new NotFoundException(__('Invalid regular task'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->RegularTask->delete()) {
			$this->Session->setFlash(__('The regular task has been deleted. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The regular task could not be deleted. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
