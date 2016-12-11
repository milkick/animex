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
    foreach ($pageData as $comment) {
        echo "<p>" . h($comment['Comment']['comment']) . "</p>";
    }
    echo "<div id=\"pagenator_numbers\">";
    echo $this->Paginator->numbers();
    echo "</div>";
?>
</div>