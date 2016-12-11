
<?php
    echo $this->Html->link('メモする', array(
                'controller' => 'comments',
                'action' => 'add'
            ),
            array(
                'class' => 'btn btn-primary btn-sm',
                'style' => 'margin-left:20px'
            )
    );
    
?>