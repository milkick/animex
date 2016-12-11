<?php
App::uses('UsersController', 'Controller');

/**
 * UsersController Test Case
 */
class UsersControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user'
	);
/**
 * Controller setup
 * 
 */
    public function setup() {
        parent::setUp();
     
    }
/**
 * testIndex method
 *
 * @test
 * @return void
 */
	public function インデックスからコメントへ遷移() {
		$this->testAction("/users/index", array('return' => 'view'));
        debug($this->headers);
        $this->assertRegExp("/\/comments$/", $this->headers["Location"]);
	}

/**
 * testView method
 *@test
 * @return void
 */
	public function registerをgetで見るとregisterに戻る() {
		$this->testAction('/users/register', array(
            'method' => 'get'
            ));
        $this->assertContains('register', $this->headers['Location']);

	}
    
/**
 * testView method
 *@test
 * @return void
 */
	public function registerで空白でpostを送るとregisterに戻る() {
		$autoRender = false;
        $this->testAction('/users/register', array(
            'method' => 'post',
            'data' => array(
                'username' => 'himabito',
                'password' => 'himabito',
                'password_confirm' => 'test'
                )
            ));
        debug($this->controller->User->validationErrors);
        $this->assertNotEmpty($this->controller->User->validationErrors);
        
    }
/**
 * testView method
 *@test
 * @return void
 */
	public function registerで正しい値でpostを送ると成功してindexに遷移する() {
		$autoRender = false;
        $this->testAction('/users/register', array(
            'method' => 'post',
            'data' => array(
                'username' => 'himabito@hotmail.com',
                'password' => 'himabito',
                'password_confirm' => 'himabito'
                )
            ));
        debug($this->controller->User->validationErrors);
        $this->assertEmpty($this->controller->User->validationErrors);
        $this->assertTextContains('index', $this->headers['Location']);
        
    }
/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {
		$this->markTestIncomplete('testAdd not implemented.');
	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {
		$this->markTestIncomplete('testEdit not implemented.');
	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {
		$this->markTestIncomplete('testDelete not implemented.');
	}

/**
 * testAdminIndex method
 *
 * @return void
 */
	public function testAdminIndex() {
		$this->markTestIncomplete('testAdminIndex not implemented.');
	}

/**
 * testAdminView method
 *
 * @return void
 */
	public function testAdminView() {
		$this->markTestIncomplete('testAdminView not implemented.');
	}

/**
 * testAdminAdd method
 *
 * @return void
 */
	public function testAdminAdd() {
		$this->markTestIncomplete('testAdminAdd not implemented.');
	}

/**
 * testAdminEdit method
 *
 * @return void
 */
	public function testAdminEdit() {
		$this->markTestIncomplete('testAdminEdit not implemented.');
	}

/**
 * testAdminDelete method
 *
 * @return void
 */
	public function testAdminDelete() {
		$this->markTestIncomplete('testAdminDelete not implemented.');
	}

}
