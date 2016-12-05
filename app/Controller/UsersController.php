<?php
App::uses('AppController', 'Controller');
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
	public $components = array('Paginator', 'Session', 'Flash');
    public $name = 'Users';
/**
 * login method
 *
 * @return void
 */
	public function login() {

	}
 
    /**
 * logout method
 *
 * @return void
 */
    public function logout(){
        $this->Session->delete('login');
        $this->redirect($this->Auth->logout());
    }


}
