<?php
App::uses('AppController', 'Controller');
/**
 * DealTypes Controller
 *
 * @property DealType $DealType
 * @property PaginatorComponent $Paginator
 */
class DealTypesController extends AppController {

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
		$this->DealType->recursive = 0;
		$this->set('dealTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DealType->exists($id)) {
			throw new NotFoundException(__('Invalid deal type'));
		}
		$options = array('conditions' => array('DealType.' . $this->DealType->primaryKey => $id));
		$this->set('dealType', $this->DealType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DealType->create();
			if ($this->DealType->save($this->request->data)) {
				$this->Flash->success(__('The deal type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The deal type could not be saved. Please, try again.'));
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
		if (!$this->DealType->exists($id)) {
			throw new NotFoundException(__('Invalid deal type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DealType->save($this->request->data)) {
				$this->Flash->success(__('The deal type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The deal type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DealType.' . $this->DealType->primaryKey => $id));
			$this->request->data = $this->DealType->find('first', $options);
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
		$this->DealType->id = $id;
		if (!$this->DealType->exists()) {
			throw new NotFoundException(__('Invalid deal type'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DealType->delete()) {
			$this->Flash->success(__('The deal type has been deleted.'));
		} else {
			$this->Flash->error(__('The deal type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
