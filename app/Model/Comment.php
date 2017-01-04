<?php
App::uses('AppModel', 'Model');

/**
 * Comment Model
 *
 */
class Comment extends AppModel {

    /**
     * Primary key field
     *
     * @var string
     */
    public $primaryKey = 'id';

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'comment' => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'required' => true,
                'allowEmpty' => false,
                'message' => '空欄です'
            )
        ),
        'user_inc' => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'required' => true,
                'allowEmpty' => false,
                'message' => 'error unknown user'
            )            
        )
    );
}