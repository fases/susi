<?php
App::uses('AppController', 'Controller');
/**
 * Utilizations Controller
 *
 * @property Utilization $Utilization
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class UtilizationsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Utilization->recursive = 0;
		$this->set('utilizations', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Utilization->exists($id)) {
			throw new NotFoundException(__('Invalid utilization'));
		}
		$options = array('conditions' => array('Utilization.' . $this->Utilization->primaryKey => $id));
		$this->set('utilization', $this->Utilization->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Utilization->create();
			if ($this->Utilization->save($this->request->data)) {
				$this->Flash->success(__('The utilization has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The utilization could not be saved. Please, try again.'));
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
		if (!$this->Utilization->exists($id)) {
			throw new NotFoundException(__('Invalid utilization'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Utilization->save($this->request->data)) {
				$this->Flash->success(__('The utilization has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The utilization could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Utilization.' . $this->Utilization->primaryKey => $id));
			$this->request->data = $this->Utilization->find('first', $options);
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
		$this->Utilization->id = $id;
		if (!$this->Utilization->exists()) {
			throw new NotFoundException(__('Invalid utilization'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Utilization->delete()) {
			$this->Flash->success(__('The utilization has been deleted.'));
		} else {
			$this->Flash->error(__('The utilization could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
