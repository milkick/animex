<?php

App::uses('AppController', 'Controller');
App::uses('AuthComponent', 'Controller/Component');

/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class UsersController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator', 'Session', 'Flash', 'Auth');
    public $name = 'Users';

    function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('register', 'login');
    }

    /**
     * index method
     * 
     * @return void
     */
    public function index() {
        $this->redirect(array(
            'controller' => 'comments',
            'action' => 'index'
                )
        );
    }

    /**
     * register method
     * @return void
     * 
     */
    public function register() {
        if ($this->request->is('post') && $this->User->save($this->request->data)) {
            $this->Auth->login($this->request->data('User'));
            return $this->redirect('index');
        } elseif($this->request->is('post')) {
            $this->Flash->error('登録失敗');
        }
    }

    /**
     * login method
     *
     * @return void
     */
    public function login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login($this->request->data('User'))) {
                return $this->redirect('index');
            } else {
                $this->Flash->error('ログイン失敗');
                return $this->redirect('login');
            }
        }
    }

    /**
     * logout method
     *
     * @return void
     */
    public function logout() {
        $this->Auth->logout();
        $this->Session->destroy();
        return $this->redirect('login');
    }

}
