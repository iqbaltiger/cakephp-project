<?php
App::uses('AppController', 'Controller');
/**
 * TaskAssigns Controller
 *
 * @property TaskAssign $TaskAssign
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class TaskAssignsController extends AppController {

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
		$this->TaskAssign->recursive = 0;
		$this->set('taskAssigns', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TaskAssign->exists($id)) {
			throw new NotFoundException(__('Invalid task assign'));
		}
		$options = array('conditions' => array('TaskAssign.' . $this->TaskAssign->primaryKey => $id));
		$this->set('taskAssign', $this->TaskAssign->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TaskAssign->create();
			if ($this->TaskAssign->save($this->request->data)) {
				$last_insert_id = $this->TaskAssign->getLastInsertID();
								$this->Session->setFlash(__('The task assign has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'view',$last_insert_id));
			} else {
				$this->Session->setFlash(__('The task assign could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$users = $this->TaskAssign->User->find('list');
		$tasks = $this->TaskAssign->Task->find('list');
		$departments = $this->TaskAssign->Department->find('list');
		$this->set(compact('users', 'tasks', 'departments'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->TaskAssign->exists($id)) {
			throw new NotFoundException(__('Invalid task assign'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TaskAssign->save($this->request->data)) {
				$this->Session->setFlash(__('The task assign has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'view',$id));
			} else {
				$this->Session->setFlash(__('The task assign could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('TaskAssign.' . $this->TaskAssign->primaryKey => $id));
			$this->request->data = $this->TaskAssign->find('first', $options);
		}
		$users = $this->TaskAssign->User->find('list');
		$tasks = $this->TaskAssign->Task->find('list');
		$departments = $this->TaskAssign->Department->find('list');
		$this->set(compact('users', 'tasks', 'departments'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->TaskAssign->id = $id;
		if (!$this->TaskAssign->exists()) {
			throw new NotFoundException(__('Invalid task assign'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TaskAssign->delete()) {
			$this->Session->setFlash(__('The task assign has been deleted. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The task assign could not be deleted. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
