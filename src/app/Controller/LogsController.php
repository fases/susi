<?php
App::uses('AppController', 'Controller');
/**
 * Logs Controller
 *
 * @property Log $Log
 * @property PaginatorComponent $Paginator
 */
class LogsController extends AppController {

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
		$this->Log->recursive = 0;
		$this->set('logs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Log->exists($id)) {
			throw new NotFoundException(__('Invalid log'));
		}
		$options = array('conditions' => array('Log.' . $this->Log->primaryKey => $id));
		$this->set('log', $this->Log->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($campus_item_id = null) {
        $this->loadModel('CampusItem');
		if ($this->request->is('post')) {
			$this->Log->create();
            $this->request->data['Log']['campus_item_id'] = $campus_item_id;
            if ($this->Log->save($this->request->data)) {
                $this->Flash->success(__('The log has been saved.'));

                $this->loadModel('CampusItem');
                $amount = (isset($this->data['Log']['amount'])) ? $this->data['Log']['amount'] : null;
                $oldAmount = $this->CampusItem->findById($campus_item_id)['CampusItem']['amount'];

                if (isset($this->data['Log']['deal_type_id'])) {
                    if ($this->data['Log']['deal_type_id'] == 0) { //Adição
                        $this->CampusItem->save(array('id' => $campus_item_id, 'amount' => $oldAmount + $amount));
                    } else if ($this->data['Log']['deal_type_id'] == 1) { //Subtração
                        $this->CampusItem->save(array('id' => $campus_item_id, 'amount' => $oldAmount - $amount));
                    }
                }

                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The log could not be saved. Please, try again.'));
            }
        }
        $campusItems = $this->Log->CampusItem->find('list');
        $dealTypes = $this->Log->DealType->find('list');
        $campusItem = $this->CampusItem->findById($campus_item_id);
        $this->set(compact('campusItems', 'dealTypes', 'campusItem'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Log->exists($id)) {
			throw new NotFoundException(__('Invalid log'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Log->save($this->request->data)) {
				$this->Flash->success(__('The log has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The log could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Log.' . $this->Log->primaryKey => $id));
			$this->request->data = $this->Log->find('first', $options);
		}
		$campusItems = $this->Log->CampusItem->find('list');
		$dealTypes = $this->Log->DealType->find('list');
		$this->set(compact('campusItems', 'dealTypes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Log->id = $id;
		if (!$this->Log->exists()) {
			throw new NotFoundException(__('Invalid log'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Log->delete()) {
			$this->Flash->success(__('The log has been deleted.'));
		} else {
			$this->Flash->error(__('The log could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
