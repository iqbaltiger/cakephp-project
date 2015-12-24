<?php
App::uses('AppController', 'Controller');
/**
 * Designations Controller
 *
 * @property Designation $Designation
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class DesignationsController extends AppController {

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
		$this->Designation->recursive = 0;
            // $Total = $this->Designation->find('count');
		$this->set('designations', $this->Paginator->paginate());
                
              //  $this->set('Total',$Total);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Designation->exists($id)) {
			throw new NotFoundException(__('Invalid designation'));
		}
		$options = array('conditions' => array('Designation.' . $this->Designation->primaryKey => $id));
		$this->set('designation', $this->Designation->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Designation->create();
			if ($this->Designation->save($this->request->data)) {
				$last_insert_id = $this->Designation->getLastInsertID();
								$this->Session->setFlash(__('The designation has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'view',$last_insert_id));
			} else {
				$this->Session->setFlash(__('The designation could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$parentDesignations = $this->Designation->find('list');
		//pr($parentDesignations);exit;
                
                $this->set('parentDesignations',$parentDesignations);
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Designation->exists($id)) {
			throw new NotFoundException(__('Invalid designation'));
		}
		if ($this->request->is(array('post', 'put'))) {
                    
                    
                     
			if ($this->Designation->save($this->request->data)) {
                            
                            
                           
                            
				$this->Session->setFlash(__('The designation has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'view',$id));
			} else {
				$this->Session->setFlash(__('The designation could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Designation.' . $this->Designation->primaryKey => $id));
			$this->request->data = $this->Designation->find('first', $options);
		}
		$parentDesignations = $this->Designation->find('list');
		$this->set('parentDesignations',$parentDesignations);
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Designation->id = $id;
		if (!$this->Designation->exists()) {
			throw new NotFoundException(__('Invalid designation'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Designation->delete()) {
			$this->Session->setFlash(__('The designation has been deleted. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The designation could not be deleted. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
