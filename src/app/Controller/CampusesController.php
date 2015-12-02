<?php
App::uses('AppController', 'Controller');
/**
 * Campuses Controller
 *
 * @property Campus $Campus
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class CampusesController extends AppController {

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
		$this->Campus->recursive = 0;
		$this->set('campuses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Campus->exists($id)) {
			throw new NotFoundException(__('Invalid campus'));
		}
		$options = array('conditions' => array('Campus.' . $this->Campus->primaryKey => $id));
		$this->set('campus', $this->Campus->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Campus->create();
			if ($this->Campus->save($this->request->data)) {
				$this->Flash->success(__('The campus has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The campus could not be saved. Please, try again.'));
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
		if (!$this->Campus->exists($id)) {
			throw new NotFoundException(__('Invalid campus'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Campus->save($this->request->data)) {
				$this->Flash->success(__('The campus has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The campus could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Campus.' . $this->Campus->primaryKey => $id));
			$this->request->data = $this->Campus->find('first', $options);
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
		$this->Campus->id = $id;
		if (!$this->Campus->exists()) {
			throw new NotFoundException(__('Invalid campus'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Campus->delete()) {
			$this->Flash->success(__('The campus has been deleted.'));
		} else {
			$this->Flash->error(__('The campus could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
