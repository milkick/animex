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
            if ($this->Comment->save($this->request->data)) {
                $this->Flash->success('書き込みました');
                return $this->redirect('add');
            }
            $this->Flash->error('失敗した失敗した失敗した');
        }
    }
}