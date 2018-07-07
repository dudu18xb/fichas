<?php
namespace App\Controller;
use App\Controller\AppController;
/**
 * Fichasodontologicas Controller
 *
 * @property \App\Model\Table\FichasodontologicasTable $Fichasodontologicas
 *
 * @method \App\Model\Entity\Fichasodontologica[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FichasodontologicasController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Search.Prg', [
            'actions' => ['index']
        ]);
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $fichasodontologicas = $this->Fichasodontologicas
            ->find('search', ['search' => $this->request->getQueryParams()]);
        $this->set('fichasodontologicas', $this->paginate($fichasodontologicas));
    }
    /**
     * View method
     *
     * @param string|null $id Fichasodontologica id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fichasodontologica = $this->Fichasodontologicas->get($id, [
            'contain' => []
        ]);
        $this->set('fichasodontologica', $fichasodontologica);
    }
    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fichasodontologica = $this->Fichasodontologicas->newEntity();
        if ($this->request->is('post')) {
            $fichasodontologica = $this->Fichasodontologicas->patchEntity($fichasodontologica, $this->request->data);
            if ($this->Fichasodontologicas->save($fichasodontologica)) {
                $this->Flash->success(__('The {0} has been saved.', 'Fichasodontologica'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Fichasodontologica'));
            }
        }
        $this->set(compact('fichasodontologica'));
        $this->set('_serialize', ['fichasodontologica']);
    }
    /**
     * Edit method
     *
     * @param string|null $id Fichasodontologica id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fichasodontologica = $this->Fichasodontologicas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fichasodontologica = $this->Fichasodontologicas->patchEntity($fichasodontologica, $this->request->data);
            if ($this->Fichasodontologicas->save($fichasodontologica)) {
                $this->Flash->success(__('The {0} has been saved.', 'Fichasodontologica'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Fichasodontologica'));
            }
        }
        $this->set(compact('fichasodontologica'));
        $this->set('_serialize', ['fichasodontologica']);
    }
    /**
     * Delete method
     *
     * @param string|null $id Fichasodontologica id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fichasodontologica = $this->Fichasodontologicas->get($id);
        if ($this->Fichasodontologicas->delete($fichasodontologica)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Fichasodontologica'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Fichasodontologica'));
        }
        return $this->redirect(['action' => 'index']);
    }
    public function isAuthorized($user)
    {
        // Todos os usuários registrados podem adicionar artigos
        if ($this->request->getParam('action') === 'add') {
            return true;
        }
        if ($this->request->getParam('action') === 'edit') {
            return true;
        }
        if ($this->request->getParam('action') === 'delete') {
            return true;
        }
        return parent::isAuthorized($user);
    }
}