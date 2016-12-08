<?php echo $this->Html->css('cake.notic.errors.css');
echo $this->fetch('css');        
?>
<div id="<?php echo $key; ?>Message" class="<?php echo !empty($params['class']) ? $params['class'] : 'message'; ?>"><?php echo $message; ?></div>