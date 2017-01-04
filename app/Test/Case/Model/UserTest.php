<?php

App::uses('User', 'Model');

/**
 * User Test Case
 */
class UserTest extends CakeTestCase {

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = array(
        'app.user'
    );

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp() {
        parent::setUp();
        $this->User = ClassRegistry::init('User');
    }

    /**
     * test confirmPassword
     * @test
     * 
     * @return void
     */
    public function パスワードとパスワード再入力が一致したらtrueを返す() {
        $autoRender = false;
        $this->User->data = array('User' =>
            array(
                'password_confirm' => 'test'
            )
        );
        $field['password'] = 'test';
        $result = $this->User->confirmPassword($field, 'password_confirm');
        $this->assertTrue($result);
    }
    
    /**
     * test before save
     * @test
     * 
     * @return void
     */
    public function セーブする前にパスワードをハッシュ化する() {
        $autoRender = false;
        $this->User->data = array('User' =>
            array(
                'password' => 'test'
            )
        );
        $result = $this->User->beforeSave();
        $this->assertTrue($result);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown() {
        unset($this->User);

        parent::tearDown();
    }

}
