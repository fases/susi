<?php
App::uses('AppController', 'Controller');
/**
 * Indicators Controller
 *
 * @property Indicator $Indicator
 * @property PaginatorComponent $Paginator
 */
class IndicatorsController extends AppController {

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
		$this->Indicator->recursive = 0;
		$this->set('indicators', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Indicator->exists($id)) {
			throw new NotFoundException(__('Invalid indicator'));
		}
		$options = array('conditions' => array('Indicator.' . $this->Indicator->primaryKey => $id));
		$this->set('indicator', $this->Indicator->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Indicator->create();
			if ($this->Indicator->save($this->request->data)) {
				$this->Flash->success(__('The indicator has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The indicator could not be saved. Please, try again.'));
			}
		}
		$items = $this->Indicator->Item->find('list');
		$indicatorTypes = $this->Indicator->IndicatorType->find('list');
		$campuses = $this->Indicator->Campus->find('list');
		$this->set(compact('items', 'indicatorTypes', 'campuses'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Indicator->exists($id)) {
			throw new NotFoundException(__('Invalid indicator'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Indicator->save($this->request->data)) {
				$this->Flash->success(__('The indicator has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The indicator could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Indicator.' . $this->Indicator->primaryKey => $id));
			$this->request->data = $this->Indicator->find('first', $options);
		}
		$items = $this->Indicator->Item->find('list');
		$indicatorTypes = $this->Indicator->IndicatorType->find('list');
		$campuses = $this->Indicator->Campus->find('list');
		$this->set(compact('items', 'indicatorTypes', 'campuses'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Indicator->id = $id;
		if (!$this->Indicator->exists()) {
			throw new NotFoundException(__('Invalid indicator'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Indicator->delete()) {
			$this->Flash->success(__('The indicator has been deleted.'));
		} else {
			$this->Flash->error(__('The indicator could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}