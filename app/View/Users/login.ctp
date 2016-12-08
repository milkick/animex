
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
    'url' => 'login'
)); ?>
	<?php echo $this->Form->input('User.username', array(
        'type' => 'text',
		'placeholder' => 'Email',
        'label' => 'メールアドレス'
	)); ?>
	<?php echo $this->Form->input('User.password', array(
        'type' => 'password',
		'placeholder' => 'Password',
        'label' => 'パスワード'
	)); ?>
	<div class="form-group">
		<?php echo $this->Form->submit('ログイン', array(
			'div' => 'col col-md-9 col-md-offset-3',
			'class' => 'btn btn-primary',
            'style' => 'float:left'
		)); ?>
<?php 
echo $this->Html->link(
        '新規登録する',
        array(
            'controller' => 'users',
            'action' => 'register'
        ),
        array(
            'class' => 'btn btn-success',
            'style' => 'margin-left:20px'
        )
    );
        
?>
	</div>
<?php echo $this->Form->end(); ?>

