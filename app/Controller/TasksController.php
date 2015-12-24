<?php

App::uses('AppController', 'Controller');

/**
 * Tasks Controller
 *
 * @property Task $Task
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class TasksController extends AppController {
    /*     * ******
     * 
     * Load Model
     * 
     * 
     * **** */

    public $uses = array('Task', 'User', 'TaskAssign');

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

        $this->Task->recursive = 0;
        $this->set('tasks', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Task->exists($id)) {
            throw new NotFoundException(__('Invalid task'));
        }
        $options = array('conditions' => array('Task.' . $this->Task->primaryKey => $id));
        $this->set('task', $this->Task->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {

        $uid = CakeSession::read("Auth.User.id");

        $userList = $this->User->find('list', array('fields' => array('User.id', 'User.username')));
        // pr($userList);


        $this->set('alluser', $userList);


        $totalTaskRow = $this->Task->find('count');

        $TaskNo = $totalTaskRow + 1000;

        $this->set('taskNo', $TaskNo);
        // $this->layout= 'ajax';
        if ($this->request->is('post')) {

            //pr($this->request->data);

            $data = $this->request->data;

            $data['Task']['user_id']=  $uid;



//                 pr($data);
//                 
//                 exit;

            $this->Task->create();
            if ($this->Task->save($data)) {
                
                $last_insert_id = $this->Task->getLastInsertID();


                $data['TaskAssign']['start_date'] = $data['Task']['start_date'];

                $data['TaskAssign']['end_date'] = $data['Task']['end_date'];
                $data['TaskAssign']['task_id'] = $last_insert_id;

                $data['TaskAssign']['from_assign'] = $uid;

                $data['TaskAssign']['notification_status'] = 0;
                $this->TaskAssign->save($data);

                $this->Session->setFlash(__('The task has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                //return $this->redirect(array('action' => 'view',$last_insert_id));

                return $this->redirect(array('action' => 'index', $last_insert_id));
            } else {
                $this->Session->setFlash(__('The task could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
            }
        }
        $parentTasks = $this->Task->ParentTask->find('list');
        $this->set(compact('parentTasks'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Task->exists($id)) {
            throw new NotFoundException(__('Invalid task'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Task->save($this->request->data)) {
                $this->Session->setFlash(__('The task has been saved. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'view', $id));
            } else {
                $this->Session->setFlash(__('The task could not be saved. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $options = array('conditions' => array('Task.' . $this->Task->primaryKey => $id));
            $this->request->data = $this->Task->find('first', $options);
        }
        $parentTasks = $this->Task->ParentTask->find('list');
        $this->set(compact('parentTasks'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Task->id = $id;
        if (!$this->Task->exists()) {
            throw new NotFoundException(__('Invalid task'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Task->delete()) {
            $this->Session->setFlash(__('The task has been deleted. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
        } else {
            $this->Session->setFlash(__('The task could not be deleted. Please, try again. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'), 'default', array('class' => 'alert alert-success'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    public function assigntask() {
        
    }

    public function regulartasklist() {

        $this->loadModel('RegularTask');
        $allRegularTask = $this->RegularTask->find('all');

        $this->set('regularTasks', $allRegularTask);
    }

    
    
    
    
    
}
