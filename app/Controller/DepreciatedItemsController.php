<?php
App::uses('AppController', 'Controller');
/**
 * DepreciatedItems Controller
 *
 * @property DepreciatedItem $DepreciatedItem
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class DepreciatedItemsController extends AppController {

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
		$this->DepreciatedItem->recursive = 0;
		$this->set('depreciatedItems', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DepreciatedItem->exists($id)) {
			throw new NotFoundException(__('Invalid depreciated item'));
		}
		$options = array('conditions' => array('DepreciatedItem.' . $this->DepreciatedItem->primaryKey => $id));
		$this->set('depreciatedItem', $this->DepreciatedItem->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DepreciatedItem->create();
			if ($this->DepreciatedItem->save($this->request->data)) {
				$last_insert_id = $this->DepreciatedItem->getLastInsertID();
								$this->Session->setFlash(__('The depreciated item has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'view',$last_insert_id));
			} else {
				$this->Session->setFlash(__('The depreciated item could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$items = $this->DepreciatedItem->Item->find('list');
		$stocks = $this->DepreciatedItem->Stock->find('list');
		$users = $this->DepreciatedItem->User->find('list');
		$this->set(compact('items', 'stocks', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DepreciatedItem->exists($id)) {
			throw new NotFoundException(__('Invalid depreciated item'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DepreciatedItem->save($this->request->data)) {
				$this->Session->setFlash(__('The depreciated item has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'view',$id));
			} else {
				$this->Session->setFlash(__('The depreciated item could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('DepreciatedItem.' . $this->DepreciatedItem->primaryKey => $id));
			$this->request->data = $this->DepreciatedItem->find('first', $options);
		}
		$items = $this->DepreciatedItem->Item->find('list');
		$stocks = $this->DepreciatedItem->Stock->find('list');
		$users = $this->DepreciatedItem->User->find('list');
		$this->set(compact('items', 'stocks', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DepreciatedItem->id = $id;
		if (!$this->DepreciatedItem->exists()) {
			throw new NotFoundException(__('Invalid depreciated item'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DepreciatedItem->delete()) {
			$this->Session->setFlash(__('The depreciated item has been deleted. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The depreciated item could not be deleted. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
