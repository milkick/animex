<?php
echo $this->Form->create('Comment', array(
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
    'url' => 'add'
));
echo $this->Form->input('Comment.comment',
        array(
            'type' => 'text',
            'rows' => '3',
            'placeholder' => 'メモを入力',
            'label' => 'メモ'
        )
    );
echo $this->Form->button('書き込み',
        array(
            'type' => 'submit',
            'class' => 'btn btn-success'
        )
        
        );
echo $this->Form->end();
echo $this->Html->link('戻る', array(
        'controller' => 'comments',
        'action' => 'index'
    ),
    array(
        'class' => 'btn btn-default',
        'style' => 'margin-left:20px'
    )
);