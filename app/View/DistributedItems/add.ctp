<div class="header bg-light b-b b-light text-right">
	<div class="btn-group">
		<div class="btn btn-sm btn-default btn-icon">
			<i class="icon-large icon-list "></i>
		</div>
		<?php echo $this->Html->link(__('Distributed Item List'), array('action' => 'index'),array('class' => 'btn btn-sm btn-default ajax_page')); ?>
	</div>
</div>
<!-- Panel -->
<div class="widget">
	<div class="widget-header">
		<i class="icon-bookmark"></i>
		<h3><?php echo __('Distributed Items'); ?>
</h3>
	</div>
	<div class="widget-content">
		<?php echo $this->Form->create('DistributedItem',array('role'=>'form','class'=>'')); ?>
		<?php
			echo $this->Form->input('item_id',array('class'=>'form-control','div'=>'form-group'));
			echo $this->Form->input('stock_id',array('class'=>'form-control','div'=>'form-group'));
			echo $this->Form->input('user_id',array('class'=>'form-control','div'=>'form-group'));
			echo $this->Form->input('quantity',array('class'=>'form-control','div'=>'form-group'));
			echo $this->Form->submit('Submit',array('class'=>'btn btn-success','label'=>false,'div'=>false));
			echo $this->Form->input('Cancel',array('type'=>'reset','class'=>'btn btn-warning left-shift-reset','between'=>false,'after'=>false,'label'=>false,'div'=>false));
			?>

		<?php echo $this->Form->end(); ?>
	</div>
</div>
