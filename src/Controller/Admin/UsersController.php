<?php

namespace App\Controller\Admin;

use Cake\Event\Event;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
//    public function beforeFilter(Event $event)
//    {
//        parent::beforeFilter($event);
//        $this->Auth->allow(['add', 'logout']);
//        $this->Auth->allow('edit');
//    }

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Flash');

        $this->loadComponent('Search.Prg', [
            'actions' => ['index']
        ]);
    }
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        //$this->Auth->allow(['add', 'logout','edit', 'delete']);
    }

    /**
     *
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $users = $this->Users
            ->find('search', ['search' => $this->request->getQueryParams()]);
        $this->set('users', $this->paginate($users));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('O {0} foi salvo.', 'User'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O {0} Não pode ser salvo, Por Favor tente novamente', 'User'));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }



    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('O {0} Foi salvo com sucesso.', 'User'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O {0} não pode ser salvo. Por favor tente novamente', 'User'));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('O {0} foi deletado', 'User'));
        } else {
            $this->Flash->error(__('O {0} não pode ser salvo. Por favor tente novamente.', 'User'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function login()
    {
        $this->viewBuilder()->setLayout('login');
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error('Usuário ou senha incorretos');
        }
    }

    public function logout()
    {
        $this->Flash->success('Você saiu com sucesso.');
        return $this->redirect($this->Auth->logout());
    }

    public function isAuthorized($user)
    {
        // Todos os usuários registrados podem adicionar artigos
        if ($this->request->getParam('action') === 'add') {
            return true;
        }
        return parent::isAuthorized($user);
    }
}
