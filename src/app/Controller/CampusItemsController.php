<?php
App::uses('AppController', 'Controller');
/**
 * CampusItems Controller
 *
 * @property CampusItem $CampusItem
 * @property PaginatorComponent $Paginator
 */
class CampusItemsController extends AppController {

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
        $this->recursive = 0;
        $expireds = function () {
            $this->Paginator->settings = array(
                'conditions' => array(
                    'Campus.id' => $this->Auth->user('campus_id'),
                    'CampusItem.validity <' => date('Y-m-d', strtotime('now')),
                    'CampusItem.visibility' => 1
                )
            );
            return $this->Paginator->paginate();
        };

        $almostExpireds = function () {
            $this->Paginator->settings = array(
                'conditions' => array(
                    'Campus.id' => $this->Auth->user('campus_id'),
                    'CampusItem.validity <=' => date('Y-m-d', strtotime('+1 month')),
                    'CampusItem.validity >' => date('Y-m-d', strtotime('now')),
                    'CampusItem.visibility' => 1
                )
            );
            return $this->Paginator->paginate();
        };

        $this->set('expireds', $expireds());
        $this->set('almostExpireds', $almostExpireds());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->CampusItem->exists($id)) {
            throw new NotFoundException(__('Invalid campus item'));
        }
        $options = array('conditions' => array('CampusItem.' . $this->CampusItem->primaryKey => $id));
        $this->set('campusItem', $this->CampusItem->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->CampusItem->create();
            // Define o item como pertencente ao usuário da sessão
            $this->request->data['CampusItem']['user_id'] = $this->Auth->user('id');
            if ($this->CampusItem->save($this->request->data)) {
                $this->Flash->success(__('The campus item has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The campus item could not be saved. Please, try again.'));
            }
        }
        $items = $this->CampusItem->Item->find('list');
        $users = $this->CampusItem->User->find('list');
        $this->set(compact('items', 'users'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->CampusItem->exists($id)) {
            throw new NotFoundException(__('Invalid campus item'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->CampusItem->save($this->request->data)) {
                $this->Flash->success(__('The campus item has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The campus item could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('CampusItem.' . $this->CampusItem->primaryKey => $id));
            $this->request->data = $this->CampusItem->find('first', $options);
        }
        $items = $this->CampusItem->Item->find('list');
        $users = $this->CampusItem->User->find('list');
        $this->set(compact('items', 'users'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->CampusItem->id = $id;
        if (!$this->CampusItem->exists()) {
            throw new NotFoundException(__('Invalid campus item'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->CampusItem->delete()) {
            $this->Flash->success(__('The campus item has been deleted.'));
        } else {
            $this->Flash->error(__('The campus item could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    // O delete() remove o item completamente do banco de dados.  Já o
    // remove() mantém o item e define seu campo visibility com valor 0,
    // para que fique disponível no relatório, mas seja ignorado em
    // outras consultas.
    public function remove($id = null) {
        $this->CampusItem->id = $id;
        if (!$this->CampusItem->exists()) {
            throw new NotFoundException(__('Invalid campus item'));
        }
        $this->CampusItem->saveField('visibility', 0);
        return $this->redirect(array('action' => 'estoque'));
    }

    public function estoque() {
        $this->recursive = 0;

        $this->Paginator->settings = array(
            'conditions' => array(
                'Campus.id' => $this->Auth->user('campus_id'),
                'CampusItem.visibility' => 1
            )
        );

        $this->set('items', $this->Paginator->paginate());
    }
}
