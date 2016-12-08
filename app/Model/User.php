<?php

App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

/**
 * User Model
 *
 */
class User extends AppModel {

    /**
     * Primary key field
     *
     * @var string
     */
    public $primaryKey = 'inc';

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'username' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
                'allowEmpty' => false,
                'message' => '空欄です'
            ),
            'validEmail' => array(
                'rule' => array(
                    'email', true
                ),
                'message' => 'アドレスを入力してください'
            ),
            'emailExists' => array(
                'rule' => 'isUnique',
                'message' => '既に登録されています'
            )
        ),
        'password' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
                'allowEmpty' => false,
                'message' => '空欄です'
            ),
            'between' => array(
                'rule' => array('between', 8, 32),
                'message' => 'パスワードは8～32文字で入力してください'
            ),
            'match' => array(
                'rule' => array('confirmPassword', 'password_confirm'),
                'message' => '再入力と一致しません'
            ),
            'varidateString' => array(
                'rule' => '/^[a-z0-9]+$/i',
                'message' => '半角英数字のみで入力してください'
            )
        )
    );

    public function confirmPassword($field, $password_confirm) {
        if ($field['password'] === $this->data[$this->name][$password_confirm]) {
            return true;
        }
    }

    public function beforeSave($options = array()) {
        if (isset($this->data[$this->alias]['password'])) {
            $passwordHasher = new BlowfishPasswordHasher();
            $this->data[$this->alias]['password'] = $passwordHasher->hash(
                    $this->data[$this->alias]['password']
            );
        }
        return true;
    }

}
