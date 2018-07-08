<?php
namespace App\Controller;
use App\Controller\AppController;

use Cake\I18n\Time;
/**
 * Fichasmedicas Controller
 *
 * @property \App\Model\Table\FichasmedicasTable $Fichasmedicas
 *
 * @method \App\Model\Entity\Fichasmedica[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FichasmedicasController extends AppController
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
        $fichasmedicas = $this->Fichasmedicas
            ->find('search', ['search' => $this->request->getQueryParams()]);

        $total = $fichasmedicas->count();

        $this->set(compact('total'));
        $this->set('fichasmedicas', $this->paginate($fichasmedicas));
    }
    /**
     * View method
     *
     * @param string|null $id Fichasmedica id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fichasmedica = $this->Fichasmedicas->get($id, [
            'contain' => []
        ]);
        $this->set('fichasmedica', $fichasmedica);
    }
    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fichasmedica = $this->Fichasmedicas->newEntity();
        if ($this->request->is('post')) {
            $fichasmedica = $this->Fichasmedicas->patchEntity($fichasmedica, $this->request->data);
            if ($this->Fichasmedicas->save($fichasmedica)) {
                $this->Flash->success(__('O {0} foi salvo.', 'Ficha Medica'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O {0} não pôde ser salvo. Por favor, tente novamente.', 'Ficha medica'));
            }
        }
        $this->set(compact('fichasmedica'));
        $this->set('_serialize', ['fichasmedica']);
    }
    /**
     * Edit method
     *
     * @param string|null $id Fichasmedica id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fichasmedica = $this->Fichasmedicas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fichasmedica = $this->Fichasmedicas->patchEntity($fichasmedica, $this->request->data);
            if ($this->Fichasmedicas->save($fichasmedica)) {
                $this->Flash->success(__('O {0} foi salvo.', 'Ficha medica'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O {0} não pôde ser salvo. Por favor, tente novamente.', 'Ficha medica'));
            }
        }
        $this->set(compact('fichasmedica'));
        $this->set('_serialize', ['fichasmedica']);
    }
    /**
     * Delete method
     *
     * @param string|null $id Fichasmedica id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fichasmedica = $this->Fichasmedicas->get($id);
        if ($this->Fichasmedicas->delete($fichasmedica)) {
            $this->Flash->success(__('O {0} foi eliminado.', 'Ficha medica'));
        } else {
            $this->Flash->error(__('O {0} não pôde ser excluído. Por favor, tente novamente.', 'Ficha medica'));
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