<?php
namespace App\Controller;
use Cake\Event\Event;

/**
 * Fichasmedicas Controller
 *
 * @property \App\Model\Table\FichasmedicasTable $Fichasmedicas
 *
 * @method \App\Model\Entity\Fichasmedica[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ImpressaomedicaController extends AppController
{
    public function initialize()
    {
        $this->loadModel('Fichasmedicas');
    }
    public function index()
    {
        $fichasmedicas = $this->Fichasmedicas
            ->find()
            ->all();

        $total = $fichasmedicas->count();


        $this->set(compact('fichasmedicas','total'));
    }

}