<?php
echo $this->Form->create('User', array(
    'inputDefaults' => array(
        'div' => 'form-group',
        'label' => array(
            'class' => 'col col-md-3 control-label'
        ),
        'wrapInput' => 'col col-md-9',
        'class' => 'form-control'
    ),
    'class' => 'well form-horizontal',
    'type' => 'post',
    'url' => 'register'
));

echo $this->Form->input('User.username', array(
    'type' => 'text',
    'label' => 'メールアドレス',
    'maxlength' => 255,
    'required' => false
        )
);
echo $this->Form->input('User.password', array(
    'type' => 'password',
    'label' => 'パスワード',
    'maxlength' => 36,
    'required' => false
        )
);
echo $this->Form->input('User.password_confirm', array(
    'type' => 'password',
    'label' => 'パスワード再入力',
    'maxlength' => 36,
    'required' => false
        )
);

echo $this->Form->button('登録', array(
    'type' => 'submit',
    'class' => 'btn btn-success'
        )
);
echo $this->Html->link('戻る', array(
    'controller' => 'users',
    'action' => 'login'
        ), array(
    'class' => 'btn btn-danger',
    'style' => 'margin-left:10px'
        )
);
echo $this->Form->end();
