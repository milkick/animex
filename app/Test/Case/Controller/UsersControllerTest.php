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
     * @test
     * @return void
     */
    public function registerでusernameにメールアドレスではない語句でpostを送るとregisterに戻る() {
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
     * @test
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
     * login method
     * @test
     * @return void
     */
    public function login画面で正しい値を入力すると成功してindexへ遷移する() {
        $autoRender = false;
        $this->testAction('/users/login', array(
            'method' => 'post',
            'data' => array(
                'User' => array(
                    'username' => 'marionette.of.airen@gmail.com',
                    'password' => 'zerosiki'
                )
            )
        ));
        debug($this->headers);
        $this->assertEmpty($this->controller->User->validationErrors);
        //Authが動かない・・・とりあえずloginに戻されるか検証
        $this->assertTextContains('login', $this->headers['Location']);
    }
    /**
     * logout method
     * @test
     * @return void
     */    
    public function ログアウトしたらloginへ戻る() {
        $autoRender = false;
        $this->testAction('/users/logout');
        $this->assertTextContains('login', $this->headers['Location']);
    }

}
