<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Fichasmedicas Controller
 *
 * @property \App\Model\Table\FichasodontologicasTable $Fichasodontologicas
 *
 * @method \App\Model\Entity\Fichasmedica[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ImpressaoodontologicaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function initialize()
    {
        $this->loadModel('Fichasodontologicas');
    }
    public function index()
    {
        $fichasodontologicas = $this->Fichasodontologicas
            ->find();

        $total = $fichasodontologicas->count();

        $this->set(compact('fichasodontologicas','total'));
    }
}