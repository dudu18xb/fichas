<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;
use Cake\Routing\Router;
use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Database\Expression\QueryExpression;
/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 * @property \App\Model\Table\ConfigsTable $Configs
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');

        $seo = [
            'title' => 'Eduardo Rocha',
            'description' => 'Graduado em Tecnologia em Sistemas para Internet na Faculdade Alfa de Umuarama no Paraná e Especialista em Desenvolvimento de Aplicações Web e Dispositivos Móveis. Trabalho com programação para web utilizando tecnologias Front-End e Back-End, HTML 5, CSS3, Javascript, PHP 7.1, CakePHP',
            'keywords' => 'Eduardo Rocha, dudu18xb, Programador Web, Criador sites, Criar Portais','Umuarama', 'Paraná','Developer', 'Full Stack','CakePHP 3.*','Framework',
            'url' => 'https://eduardodev.com.br',
        ];
        $this->set(compact('banners','blogs','bannerparalaxs','seo','seopaginas'));

        $this->set(compact('configs'));
        

        /*
         * Enable the following components for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
        //$this->loadComponent('Csrf');
    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return \Cake\Http\Response|null|void
     */
    /*Para ativar o thema do painel*/
//    public function beforeRender(Event $event)
    //    {
    //        // Note: These defaults are just to get started quickly with development
    //        // and should not be used in production. You should instead set "_serialize"
    //        // in each action as required.
    //        if (!array_key_exists('_serialize', $this->viewVars) &&
    //            in_array($this->response->type(), ['application/json', 'application/xml'])
    //        ) {
    //            $this->set('_serialize', true);
    //        }
    //        $this->viewBuilder()->setTheme('AdminLTE');
    //        $this->set('theme', Configure::read('Theme'));
    //    }
}
