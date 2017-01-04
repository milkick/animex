<?php

App::uses('CommentsController', 'Controller');

/**
 * CommentsController Test Case
 */
class CommentsControllerTest extends ControllerTestCase {

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = array(
        'app.user',
        'app.comment'
    );

    /**
     * setUp
     * 
     * @var array
     */
    public function setUp() {
        parent::setUp();
        $this->controller = $this->generate('Comments', array(
            'components' => array(
                'Session',
                'Auth',
                'RequestHandler',
                'Paginator'
            ),
            'models' => array(
                'Comment',
                'User'
            ),
            'methods' => array(
                'User',
                'Comment'
            )
        ));
    }

    /**
     * testIndex method
     * @test
     * @expectedException NotFoundException
     * @return void
     */
    public function 存在しないページを開くとNotFound() {
        $this->testAction('/comment/index/page:666');
        debug($this->controller->Comment);
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
     * testDelete method
     *
     * @return void
     */
    public function testDelete() {
        $this->markTestIncomplete('testDelete not implemented.');
    }

}
