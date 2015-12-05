<?php
App::uses('AppController', 'Controller');
/**
 * ItemTypes Controller
 *
 * @property ItemType $ItemType
 * @property PaginatorComponent $Paginator
 */
class ItemTypesController extends AppController {

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
		$this->ItemType->recursive = 0;
		$this->set('itemTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ItemType->exists($id)) {
			throw new NotFoundException(__('Invalid item type'));
		}
		$options = array('conditions' => array('ItemType.' . $this->ItemType->primaryKey => $id));
		$this->set('itemType', $this->ItemType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ItemType->create();
			if ($this->ItemType->save($this->request->data)) {
				$this->Flash->success(__('The item type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The item type could not be saved. Please, try again.'));
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
		if (!$this->ItemType->exists($id)) {
			throw new NotFoundException(__('Invalid item type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ItemType->save($this->request->data)) {
				$this->Flash->success(__('The item type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The item type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ItemType.' . $this->ItemType->primaryKey => $id));
			$this->request->data = $this->ItemType->find('first', $options);
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
		$this->ItemType->id = $id;
		if (!$this->ItemType->exists()) {
			throw new NotFoundException(__('Invalid item type'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ItemType->delete()) {
			$this->Flash->success(__('The item type has been deleted.'));
		} else {
			$this->Flash->error(__('The item type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
