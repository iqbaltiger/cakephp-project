<!DOCTYPE html>
<html>
<head>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('favicon.ico','img/favicon.gif',array('type' => 'icon'));

		echo $this->Html->css(array('bootstrap.min','bootstrap-responsive.min','font-awesome','style','pages/signin','admin'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<?php echo $this->element('header'); ?>
	
	<?php echo $this->fetch('content'); ?>
    <?php echo $this->Html->script(array('jquery-1.7.2.min','excanvas.min','bootstrap')); ?>
   	<?php echo $this->element('footer'); ?>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
