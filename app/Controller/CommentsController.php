<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class CommentsController extends AppController {
/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session', 'Flash', 'Auth');
    public $name = 'Comments';
    public $uses = array('Comment', 'User');
    
   function beforeFilter() {
    parent::beforeFilter();
  }
/**
 * index method
 * 
 * @return void
 */
    public function index() {
        
    }
/**
 * add method
 * 
 * @return void
 */    
    public function add() {
        if ($this->request->is('post')) {
            $loginUser = $this->Auth->user();
            $this->request->data['Comment']['user_inc'] = $this->Session->read('user_inc');
            if ($this->Comment->save($this->request->data)) {
                $this->Flash->success('書き込みました');
                return $this->redirect('index');
            }
            $this->Flash->error('よくわからないけど失敗した');
            return $this->redirect('add');
        }
    }
}