<?php
App::uses('AppController', 'Controller');
/**
 * UserTypes Controller
 *
 * @property UserType $UserType
 * @property PaginatorComponent $Paginator
 */
class UserTypesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->UserType->recursive = 0;
		$this->set('userTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->UserType->exists($id)) {
			throw new NotFoundException(__('Invalid user type'));
		}
		$options = array('conditions' => array('UserType.' . $this->UserType->primaryKey => $id));
		$this->set('userType', $this->UserType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UserType->create();
			if ($this->UserType->save($this->request->data)) {
				$this->Flash->success(__('The user type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user type could not be saved. Please, try again.'));
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
		if (!$this->UserType->exists($id)) {
			throw new NotFoundException(__('Invalid user type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UserType->save($this->request->data)) {
				$this->Flash->success(__('The user type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UserType.' . $this->UserType->primaryKey => $id));
			$this->request->data = $this->UserType->find('first', $options);
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
		$this->UserType->id = $id;
		if (!$this->UserType->exists()) {
			throw new NotFoundException(__('Invalid user type'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->UserType->delete()) {
			$this->Flash->success(__('The user type has been deleted.'));
		} else {
			$this->Flash->error(__('The user type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
