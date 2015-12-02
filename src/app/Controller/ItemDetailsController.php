<?php
App::uses('AppController', 'Controller');
/**
 * ItemDetails Controller
 *
 * @property ItemDetail $ItemDetail
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class ItemDetailsController extends AppController {

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
		$this->ItemDetail->recursive = 0;
		$this->set('itemDetails', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ItemDetail->exists($id)) {
			throw new NotFoundException(__('Invalid item detail'));
		}
		$options = array('conditions' => array('ItemDetail.' . $this->ItemDetail->primaryKey => $id));
		$this->set('itemDetail', $this->ItemDetail->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ItemDetail->create();
			if ($this->ItemDetail->save($this->request->data)) {
				$this->Flash->success(__('The item detail has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The item detail could not be saved. Please, try again.'));
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
		if (!$this->ItemDetail->exists($id)) {
			throw new NotFoundException(__('Invalid item detail'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ItemDetail->save($this->request->data)) {
				$this->Flash->success(__('The item detail has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The item detail could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ItemDetail.' . $this->ItemDetail->primaryKey => $id));
			$this->request->data = $this->ItemDetail->find('first', $options);
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
		$this->ItemDetail->id = $id;
		if (!$this->ItemDetail->exists()) {
			throw new NotFoundException(__('Invalid item detail'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ItemDetail->delete()) {
			$this->Flash->success(__('The item detail has been deleted.'));
		} else {
			$this->Flash->error(__('The item detail could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
