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
            'placeholder' => 'コメントを入力',
            'label' => 'コメント'
        )
    );
echo $this->Form->end('submit');