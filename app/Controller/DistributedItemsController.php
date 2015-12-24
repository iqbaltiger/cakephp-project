<?php
App::uses('AppController', 'Controller');
/**
 * DistributedItems Controller
 *
 * @property DistributedItem $DistributedItem
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class DistributedItemsController extends AppController {

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
		$this->DistributedItem->recursive = 0;
		$this->set('distributedItems', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DistributedItem->exists($id)) {
			throw new NotFoundException(__('Invalid distributed item'));
		}
		$options = array('conditions' => array('DistributedItem.' . $this->DistributedItem->primaryKey => $id));
		$this->set('distributedItem', $this->DistributedItem->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DistributedItem->create();
			if ($this->DistributedItem->save($this->request->data)) {
				$last_insert_id = $this->DistributedItem->getLastInsertID();
								$this->Session->setFlash(__('The distributed item has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'view',$last_insert_id));
			} else {
				$this->Session->setFlash(__('The distributed item could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$items = $this->DistributedItem->Item->find('list');
		$stocks = $this->DistributedItem->Stock->find('list');
		$users = $this->DistributedItem->User->find('list');
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
		if (!$this->DistributedItem->exists($id)) {
			throw new NotFoundException(__('Invalid distributed item'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DistributedItem->save($this->request->data)) {
				$this->Session->setFlash(__('The distributed item has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'view',$id));
			} else {
				$this->Session->setFlash(__('The distributed item could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('DistributedItem.' . $this->DistributedItem->primaryKey => $id));
			$this->request->data = $this->DistributedItem->find('first', $options);
		}
		$items = $this->DistributedItem->Item->find('list');
		$stocks = $this->DistributedItem->Stock->find('list');
		$users = $this->DistributedItem->User->find('list');
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
		$this->DistributedItem->id = $id;
		if (!$this->DistributedItem->exists()) {
			throw new NotFoundException(__('Invalid distributed item'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DistributedItem->delete()) {
			$this->Session->setFlash(__('The distributed item has been deleted. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The distributed item could not be deleted. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
