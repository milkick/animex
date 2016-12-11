
<?php
    echo $this->Html->link('メモする', array(
                'controller' => 'comments',
                'action' => 'add'
            ),
            array(
                'class' => 'btn btn-primary btn-lg',
                'style' => 'margin-left:20px'
            )
    );
    
    $string = "newworld hello 244.21.1.444";
    echo preg_match("/(?<!44.)21/", $string, $matches);
    var_dump($matches);
?>