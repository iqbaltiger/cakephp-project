<?php
App::uses('AppController', 'Controller');
/**
 * Dominions Controller
 *
 * @property Dominion $Dominion
 * @property PaginatorComponent $Paginator
 * @property RequestHandlerComponent $RequestHandler
 */
class DominionsController extends AppController {

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('Text');

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'RequestHandler');
	
	public function beforeFilter() {
		$this->layout = 'admin';
	}
	
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Dominion->recursive = 0;
		$this->set('dominions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Dominion->exists($id)) {
			throw new NotFoundException(__('Invalid dominion'));
		}
		$options = array('conditions' => array('Dominion.' . $this->Dominion->primaryKey => $id));
		$this->set('dominion', $this->Dominion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Dominion->create();
			if ($this->Dominion->save($this->request->data)) {
				$last_insert_id = $this->Dominion->getLastInsertID();
								$this->Session->setFlash(__('The dominion has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'view',$last_insert_id));
			} else {
				$this->Session->setFlash(__('The dominion could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Dominion->exists($id)) {
			throw new NotFoundException(__('Invalid dominion'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Dominion->save($this->request->data)) {
				$this->Session->setFlash(__('The dominion has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'view',$id));
			} else {
				$this->Session->setFlash(__('The dominion could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Dominion.' . $this->Dominion->primaryKey => $id));
			$this->request->data = $this->Dominion->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Dominion->id = $id;
		if (!$this->Dominion->exists()) {
			throw new NotFoundException(__('Invalid dominion'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Dominion->delete()) {
			$this->Session->setFlash(__('The dominion has been deleted. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The dominion could not be deleted. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
