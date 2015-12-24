<!DOCTYPE html>
<html>
<head>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
       
        <?php echo $this->Html->script('jquery-1.7.2.min');?>
	<?php
		echo $this->Html->meta('favicon.ico','img/favicon.gif',array('type' => 'icon'));

		echo $this->Html->css(array('bootstrap.min','bootstrap-responsive.min','font-awesome','style','pages/dashboard','admin','bootstrap-datetimepicker','bootstrap-datetimepicker.min'));
                
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<?php echo $this->element('header'); ?>
	<?php echo $this->element('menu'); ?>
	<div class="main">
  		<div class="main-inner">
    		<div class="container">
    			<?php echo $this->Session->flash(); ?>
    			<?php echo $this->fetch('content'); ?>
    		</div>
    	</div>
   	</div>
   	<?php echo $this->element('footer'); ?>
	<?php echo $this->Html->script(array('excanvas.min','chart.min','bootstrap','admin','bootstrap-datetimepicker')); ?>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
