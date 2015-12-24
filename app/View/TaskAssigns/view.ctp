<!-- Actions -->
<div class="header bg-light b-b b-light text-right">
	<div class="btn-group">
		<div class="btn btn-sm btn-default btn-icon">
			<i class="icon-large icon-arrow-left "></i>
		</div>
		<?php echo $this->Html->link(__('Back To Task Assigns List'), array('action' => 'index'),array('class' => 'btn btn-default')); ?> 
	</div>
	
	<div class="btn-group">
		<div class="btn btn-dark btn-icon">
			<i class="icon-large icon-edit"></i>
		</div>
		<?php echo $this->Html->link(__('Edit Task Assign'), array('action' => 'edit', $taskAssign['TaskAssign']['id']),array('class' => 'btn btn-info')); ?>
	</div>
	
			
		<div class="btn-group">
			<div class="btn btn-sm btn-dark btn-icon">
				<i class="icon-large icon-bar-chart"></i>
			</div>
			<?php echo $this->Html->link(__('Users List'), array('controller' => 'users', 'action' => 'index'),array('class' => 'btn btn-sm btn-primary')); ?> 
		</div>
		
		<div class="btn-group">
			<div class="btn btn-sm btn-dark btn-icon">
				<i class="icon-large icon-plus"></i>
			</div>
			<?php echo $this->Html->link(__('Add New User'), array('controller' => 'users', 'action' => 'add'),array('class' => 'btn btn-sm btn-primary')); ?> 
		</div>
	
			
		<div class="btn-group">
			<div class="btn btn-sm btn-dark btn-icon">
				<i class="icon-large icon-bar-chart"></i>
			</div>
			<?php echo $this->Html->link(__('Tasks List'), array('controller' => 'tasks', 'action' => 'index'),array('class' => 'btn btn-sm btn-primary')); ?> 
		</div>
		
		<div class="btn-group">
			<div class="btn btn-sm btn-dark btn-icon">
				<i class="icon-large icon-plus"></i>
			</div>
			<?php echo $this->Html->link(__('Add New Task'), array('controller' => 'tasks', 'action' => 'add'),array('class' => 'btn btn-sm btn-primary')); ?> 
		</div>
	
			
		<div class="btn-group">
			<div class="btn btn-sm btn-dark btn-icon">
				<i class="icon-large icon-bar-chart"></i>
			</div>
			<?php echo $this->Html->link(__('Departments List'), array('controller' => 'departments', 'action' => 'index'),array('class' => 'btn btn-sm btn-primary')); ?> 
		</div>
		
		<div class="btn-group">
			<div class="btn btn-sm btn-dark btn-icon">
				<i class="icon-large icon-plus"></i>
			</div>
			<?php echo $this->Html->link(__('Add New Department'), array('controller' => 'departments', 'action' => 'add'),array('class' => 'btn btn-sm btn-primary')); ?> 
		</div>
	
		
	
	<div class="btn-group">
		<div class="btn btn-sm btn-dark btn-icon">
			<i class="icon-large icon-trash "></i>
		</div>
		<?php echo $this->Form->postLink(__('Delete Task Assign'), array('action' => 'delete', $taskAssign['TaskAssign']['id']),array('class' => 'btn btn-sm btn-danger'), __('Are you sure?')); ?>
	</div>
</div>
<div class="widget">
	<div class="widget-header">
		<i class="icon-bookmark"></i>
		<h3><?php echo __('Task Assigns'); ?>
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
			<?php echo h($taskAssign['TaskAssign']['id']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('User'); ?></td>
		<td>
			<?php echo $this->Html->link($taskAssign['User']['id'], array('controller' => 'users', 'action' => 'view', $taskAssign['User']['id'])); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Task'); ?></td>
		<td>
			<?php echo $this->Html->link($taskAssign['Task']['name'], array('controller' => 'tasks', 'action' => 'view', $taskAssign['Task']['id'])); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Note'); ?></td>
		<td>
			<?php echo h($taskAssign['TaskAssign']['note']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Working Hour'); ?></td>
		<td>
			<?php echo h($taskAssign['TaskAssign']['working_hour']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Start Date'); ?></td>
		<td>
			<?php echo h($taskAssign['TaskAssign']['start_date']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('End Date'); ?></td>
		<td>
			<?php echo h($taskAssign['TaskAssign']['end_date']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('From Assign'); ?></td>
		<td>
			<?php echo h($taskAssign['TaskAssign']['from_assign']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Department'); ?></td>
		<td>
			<?php echo $this->Html->link($taskAssign['Department']['name'], array('controller' => 'departments', 'action' => 'view', $taskAssign['Department']['id'])); ?>
			&nbsp;
		</td>
	</tr>
		</table>
		
			</div>
</div>