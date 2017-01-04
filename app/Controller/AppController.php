<?php

/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 */
App::uses('Controller', 'Controller');
App::uses('AuthComponent', 'Controller/Component');
App::uses('User', 'Model');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    
    
    public $components = array(
        'Session',
        'Cookie',
        'DebugKit.Toolbar',
        'Auth' => array(
            'flash' => array(
                'element' => 'alert',
                'key' => 'auth',
                'params' => array(
                    'plugin' => 'BoostCake',
                    'class' => 'alert-error'
                ),
            ),
        ),
    );
    public $helpers = array(
        'Session',
        'Html' => array('className' => 'BoostCake.BoostCakeHtml'),
        'Form' => array('className' => 'BoostCake.BoostCakeForm'),
        'Paginator' => array('className' => 'BoostCake.BoostCakePaginator'),
    );
    public $layout = 'bootstrap';

    public function beforeFilter() {
        $uses = array('User');
        $this->set('user', $this->Auth->user());
        if ($this->User === NULL) {
            throw new Exception('Error');
        }
        if ($this->Auth->user()) {
            $userArr = $this->Auth->user();
            $userInc = $this->User->find('first', array(
                        'conditions' => array(
                            'User.username' => $userArr['username']
                        ),
                        'fields' => array(
                            'User.inc'
                        )
                    ));
            $this->Session->write('user_inc', $userInc['User']['inc']);
        }
    }

}
