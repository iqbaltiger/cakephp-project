<!-- Actions -->
<div class="header bg-light b-b b-light text-right">
	<div class="btn-group">
		<div class="btn btn-sm btn-default btn-icon">
			<i class="icon-large icon-arrow-left "></i>
		</div>
		<?php echo $this->Html->link(__('Back To Regular Tasks List'), array('action' => 'index'),array('class' => 'btn btn-default')); ?> 
	</div>
	
	<div class="btn-group">
		<div class="btn btn-dark btn-icon">
			<i class="icon-large icon-edit"></i>
		</div>
		<?php echo $this->Html->link(__('Edit Regular Task'), array('action' => 'edit', $regularTask['RegularTask']['id']),array('class' => 'btn btn-info')); ?>
	</div>
	
			
		<div class="btn-group">
			<div class="btn btn-sm btn-dark btn-icon">
				<i class="icon-large icon-bar-chart"></i>
			</div>
			<?php echo $this->Html->link(__('Roles List'), array('controller' => 'roles', 'action' => 'index'),array('class' => 'btn btn-sm btn-primary')); ?> 
		</div>
		
		<div class="btn-group">
			<div class="btn btn-sm btn-dark btn-icon">
				<i class="icon-large icon-plus"></i>
			</div>
			<?php echo $this->Html->link(__('Add New Role'), array('controller' => 'roles', 'action' => 'add'),array('class' => 'btn btn-sm btn-primary')); ?> 
		</div>
	
		
	
	<div class="btn-group">
		<div class="btn btn-sm btn-dark btn-icon">
			<i class="icon-large icon-trash "></i>
		</div>
		<?php echo $this->Form->postLink(__('Delete Regular Task'), array('action' => 'delete', $regularTask['RegularTask']['id']),array('class' => 'btn btn-sm btn-danger'), __('Are you sure?')); ?>
	</div>
</div>
<div class="widget">
	<div class="widget-header">
		<i class="icon-bookmark"></i>
		<h3><?php echo __('Regular Tasks'); ?>
</h3>
	</div>
	<div class="widget-content">
		<table class="table table-striped  table-bordered table-hover ">
			<tr>
				<td>Field Name</td>
				<td>Value</td>
			</tr>
				<tr>
		<td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($regularTask['RegularTask']['id']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Role'); ?></td>
		<td>
			<?php echo $this->Html->link($regularTask['Role']['name'], array('controller' => 'roles', 'action' => 'view', $regularTask['Role']['id'])); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Task Name'); ?></td>
		<td>
			<?php echo h($regularTask['RegularTask']['task_name']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Created'); ?></td>
		<td>
			<?php echo h($regularTask['RegularTask']['created']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Modified'); ?></td>
		<td>
			<?php echo h($regularTask['RegularTask']['modified']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Status'); ?></td>
		<td>
			<?php echo h($regularTask['RegularTask']['status']); ?>
			&nbsp;
		</td>
	</tr>
		</table>
		
			</div>
</div>