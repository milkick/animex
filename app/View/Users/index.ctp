<?php

echo $this->Html->link(
        'ログアウト',
        array(
            'controller' => 'users',
            'action' => 'logout'
        ),
        array(
            'class' => 'btn btn-success',
            'style' => 'margin-left:20px'
        )
    );
