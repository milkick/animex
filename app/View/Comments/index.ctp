<div id="comment_body" style="margin-left:1em">
<?php
    echo $this->Html->link('メモする', array(
                'controller' => 'comments',
                'action' => 'add'
            ),
            array(
                'class' => 'btn btn-primary btn-sm',
            )
    );
    echo "<div class=\"table-responsive\">";
    echo "<table class=\"table\">";
    
    foreach ($pageData as $comment) {
        echo "<tr>";
        echo "<td>" . nl2br(h($comment['Comment']['comment'])) . "</td>";
        echo "<td>" . $this->Form->postButton('削除', array(
            'controller' => 'Comments',
            'action' => 'delete'
        ),
                array(
                    'data' => array(
                        'id' => $comment['Comment']['id']
                    ),
                    'class' => 'btn btn-danger'
                )
        ) . "</td>";
        echo "</tr>";
    }
    
    echo "</table>";
    echo "</div>";
    
    echo "<div id=\"pagenator_numbers\">";
    echo $this->Paginator->numbers();
    echo "</div>";
?>
</div>
