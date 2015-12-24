<?php
App::uses('AppController', 'Controller');
/**
 * CompanyInfos Controller
 *
 * @property CompanyInfo $CompanyInfo
 * @property PaginatorComponent $Paginator
 * @property RequestHandlerComponent $RequestHandler
 */
class CompanyInfosController extends AppController {

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
		$this->CompanyInfo->recursive = 0;
		$this->set('companyInfos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CompanyInfo->exists($id)) {
			throw new NotFoundException(__('Invalid company info'));
		}
		$options = array('conditions' => array('CompanyInfo.' . $this->CompanyInfo->primaryKey => $id));
		$this->set('companyInfo', $this->CompanyInfo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CompanyInfo->create();
			if ($this->CompanyInfo->save($this->request->data)) {
				$last_insert_id = $this->CompanyInfo->getLastInsertID();
								$this->Session->setFlash(__('The company info has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'view',$last_insert_id));
			} else {
				$this->Session->setFlash(__('The company info could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->CompanyInfo->exists($id)) {
			throw new NotFoundException(__('Invalid company info'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CompanyInfo->save($this->request->data)) {
				$this->Session->setFlash(__('The company info has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'view',$id));
			} else {
				$this->Session->setFlash(__('The company info could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('CompanyInfo.' . $this->CompanyInfo->primaryKey => $id));
			$this->request->data = $this->CompanyInfo->find('first', $options);
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
		$this->CompanyInfo->id = $id;
		if (!$this->CompanyInfo->exists()) {
			throw new NotFoundException(__('Invalid company info'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CompanyInfo->delete()) {
			$this->Session->setFlash(__('The company info has been deleted. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The company info could not be deleted. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
