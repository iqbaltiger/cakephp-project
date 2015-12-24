<div class="header bg-light b-b b-light text-right">
	<div class="btn-group">
		<div class="btn btn-sm btn-default btn-icon">
			<i class="icon-large icon-list "></i>
		</div>
		<?php echo $this->Html->link(__('Profile List'), array('action' => 'index'),array('class' => 'btn btn-sm btn-default ajax_page')); ?>
	</div>
</div>
<!-- Panel -->
<div class="widget">
	<div class="widget-header">
		<i class="icon-bookmark"></i>
		<h3><?php echo __('Profiles'); ?>
</h3>
	</div>
	<div class="widget-content">
		<?php echo $this->Form->create('Profile',array('role'=>'form','class'=>'')); ?>
		<?php
			echo $this->Form->input('user_id',array('class'=>'form-control','div'=>'form-group'));
			echo $this->Form->input('first_name',array('class'=>'form-control','div'=>'form-group'));
			echo $this->Form->input('last_name',array('class'=>'form-control','div'=>'form-group'));
			echo $this->Form->input('address',array('class'=>'form-control','div'=>'form-group'));
			echo $this->Form->input('city',array('class'=>'form-control','div'=>'form-group'));
			echo $this->Form->input('state',array('class'=>'form-control','div'=>'form-group'));
			echo $this->Form->input('zip',array('class'=>'form-control','div'=>'form-group'));
			echo $this->Form->input('phone',array('class'=>'form-control','div'=>'form-group'));
			echo $this->Form->input('skypee',array('class'=>'form-control','div'=>'form-group'));
			echo $this->Form->submit('Submit',array('class'=>'btn btn-success','label'=>false,'div'=>false));
			echo $this->Form->input('Cancel',array('type'=>'reset','class'=>'btn btn-warning left-shift-reset','label'=>false,'div'=>false));
			?>

		<?php echo $this->Form->end(); ?>
	</div>
</div>
