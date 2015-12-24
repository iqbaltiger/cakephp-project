<!-- Actions -->
<div class="header bg-light b-b b-light text-right">
	<div class="btn-group">
		<div class="btn btn-sm btn-default btn-icon">
			<i class="icon-large icon-arrow-left "></i>
		</div>
		<?php echo $this->Html->link(__('Back To Profiles List'), array('action' => 'index'),array('class' => 'btn btn-default')); ?> 
	</div>
	
	<div class="btn-group">
		<div class="btn btn-dark btn-icon">
			<i class="icon-large icon-edit"></i>
		</div>
		<?php echo $this->Html->link(__('Edit Profile'), array('action' => 'edit', $profile['Profile']['id']),array('class' => 'btn btn-info')); ?>
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
			<i class="icon-large icon-trash "></i>
		</div>
		<?php echo $this->Form->postLink(__('Delete Profile'), array('action' => 'delete', $profile['Profile']['id']),array('class' => 'btn btn-sm btn-danger'), __('Are you sure?')); ?>
	</div>
</div>
<div class="widget">
	<div class="widget-header">
		<i class="icon-bookmark"></i>
		<h3><?php echo __('Profiles'); ?>
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
			<?php echo h($profile['Profile']['id']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('User'); ?></td>
		<td>
			<?php echo $this->Html->link($profile['User']['id'], array('controller' => 'users', 'action' => 'view', $profile['User']['id'])); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('First Name'); ?></td>
		<td>
			<?php echo h($profile['Profile']['first_name']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Last Name'); ?></td>
		<td>
			<?php echo h($profile['Profile']['last_name']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Address'); ?></td>
		<td>
			<?php echo h($profile['Profile']['address']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('City'); ?></td>
		<td>
			<?php echo h($profile['Profile']['city']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('State'); ?></td>
		<td>
			<?php echo h($profile['Profile']['state']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Zip'); ?></td>
		<td>
			<?php echo h($profile['Profile']['zip']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Phone'); ?></td>
		<td>
			<?php echo h($profile['Profile']['phone']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Skypee'); ?></td>
		<td>
			<?php echo h($profile['Profile']['skypee']); ?>
			&nbsp;
		</td>
	</tr>
		</table>
		
			</div>
</div>