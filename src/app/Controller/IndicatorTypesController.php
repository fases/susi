<?php
App::uses('AppController', 'Controller');
/**
 * IndicatorTypes Controller
 *
 * @property IndicatorType $IndicatorType
 * @property PaginatorComponent $Paginator
 */
class IndicatorTypesController extends AppController {

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
		$this->IndicatorType->recursive = 0;
		$this->set('indicatorTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->IndicatorType->exists($id)) {
			throw new NotFoundException(__('Invalid indicator type'));
		}
		$options = array('conditions' => array('IndicatorType.' . $this->IndicatorType->primaryKey => $id));
		$this->set('indicatorType', $this->IndicatorType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->IndicatorType->create();
			if ($this->IndicatorType->save($this->request->data)) {
				$this->Flash->success(__('The indicator type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The indicator type could not be saved. Please, try again.'));
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
		if (!$this->IndicatorType->exists($id)) {
			throw new NotFoundException(__('Invalid indicator type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->IndicatorType->save($this->request->data)) {
				$this->Flash->success(__('The indicator type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The indicator type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('IndicatorType.' . $this->IndicatorType->primaryKey => $id));
			$this->request->data = $this->IndicatorType->find('first', $options);
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
		$this->IndicatorType->id = $id;
		if (!$this->IndicatorType->exists()) {
			throw new NotFoundException(__('Invalid indicator type'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->IndicatorType->delete()) {
			$this->Flash->success(__('The indicator type has been deleted.'));
		} else {
			$this->Flash->error(__('The indicator type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
