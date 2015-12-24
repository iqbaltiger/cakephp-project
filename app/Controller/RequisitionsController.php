<?php
App::uses('AppController', 'Controller');
/**
 * Requisitions Controller
 *
 * @property Requisition $Requisition
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class RequisitionsController extends AppController {

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
		$this->Requisition->recursive = 0;
		$this->set('requisitions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Requisition->exists($id)) {
			throw new NotFoundException(__('Invalid requisition'));
		}
		$options = array('conditions' => array('Requisition.' . $this->Requisition->primaryKey => $id));
		$this->set('requisition', $this->Requisition->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Requisition->create();
			if ($this->Requisition->save($this->request->data)) {
				$last_insert_id = $this->Requisition->getLastInsertID();
								$this->Session->setFlash(__('The requisition has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'view',$last_insert_id));
			} else {
				$this->Session->setFlash(__('The requisition could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$departments = $this->Requisition->Department->find('list');
		$items = $this->Requisition->Item->find('list');
		$users = $this->Requisition->User->find('list');
		$this->set(compact('departments', 'items', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Requisition->exists($id)) {
			throw new NotFoundException(__('Invalid requisition'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Requisition->save($this->request->data)) {
				$this->Session->setFlash(__('The requisition has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'view',$id));
			} else {
				$this->Session->setFlash(__('The requisition could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Requisition.' . $this->Requisition->primaryKey => $id));
			$this->request->data = $this->Requisition->find('first', $options);
		}
		$departments = $this->Requisition->Department->find('list');
		$items = $this->Requisition->Item->find('list');
		$users = $this->Requisition->User->find('list');
		$this->set(compact('departments', 'items', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Requisition->id = $id;
		if (!$this->Requisition->exists()) {
			throw new NotFoundException(__('Invalid requisition'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Requisition->delete()) {
			$this->Session->setFlash(__('The requisition has been deleted. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The requisition could not be deleted. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
