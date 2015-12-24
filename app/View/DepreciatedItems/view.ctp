<!-- Actions -->
<div class="header bg-light b-b b-light text-right">
	<div class="btn-group">
		<div class="btn btn-sm btn-default btn-icon">
			<i class="icon-large icon-arrow-left "></i>
		</div>
		<?php echo $this->Html->link(__('Back To Depreciated Items List'), array('action' => 'index'),array('class' => 'btn btn-default')); ?> 
	</div>
	
	<div class="btn-group">
		<div class="btn btn-dark btn-icon">
			<i class="icon-large icon-edit"></i>
		</div>
		<?php echo $this->Html->link(__('Edit Depreciated Item'), array('action' => 'edit', $depreciatedItem['DepreciatedItem']['id']),array('class' => 'btn btn-info')); ?>
	</div>
	
			
		<div class="btn-group">
			<div class="btn btn-sm btn-dark btn-icon">
				<i class="icon-large icon-bar-chart"></i>
			</div>
			<?php echo $this->Html->link(__('Items List'), array('controller' => 'items', 'action' => 'index'),array('class' => 'btn btn-sm btn-primary')); ?> 
		</div>
		
		<div class="btn-group">
			<div class="btn btn-sm btn-dark btn-icon">
				<i class="icon-large icon-plus"></i>
			</div>
			<?php echo $this->Html->link(__('Add New Item'), array('controller' => 'items', 'action' => 'add'),array('class' => 'btn btn-sm btn-primary')); ?> 
		</div>
	
			
		<div class="btn-group">
			<div class="btn btn-sm btn-dark btn-icon">
				<i class="icon-large icon-bar-chart"></i>
			</div>
			<?php echo $this->Html->link(__('Stocks List'), array('controller' => 'stocks', 'action' => 'index'),array('class' => 'btn btn-sm btn-primary')); ?> 
		</div>
		
		<div class="btn-group">
			<div class="btn btn-sm btn-dark btn-icon">
				<i class="icon-large icon-plus"></i>
			</div>
			<?php echo $this->Html->link(__('Add New Stock'), array('controller' => 'stocks', 'action' => 'add'),array('class' => 'btn btn-sm btn-primary')); ?> 
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
		<?php echo $this->Form->postLink(__('Delete Depreciated Item'), array('action' => 'delete', $depreciatedItem['DepreciatedItem']['id']),array('class' => 'btn btn-sm btn-danger'), __('Are you sure?')); ?>
	</div>
</div>
<div class="widget">
	<div class="widget-header">
		<i class="icon-bookmark"></i>
		<h3><?php echo __('Depreciated Items'); ?>
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
			<?php echo h($depreciatedItem['DepreciatedItem']['id']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Item'); ?></td>
		<td>
			<?php echo $this->Html->link($depreciatedItem['Item']['name'], array('controller' => 'items', 'action' => 'view', $depreciatedItem['Item']['id'])); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Stock'); ?></td>
		<td>
			<?php echo $this->Html->link($depreciatedItem['Stock']['id'], array('controller' => 'stocks', 'action' => 'view', $depreciatedItem['Stock']['id'])); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('User'); ?></td>
		<td>
			<?php echo $this->Html->link($depreciatedItem['User']['id'], array('controller' => 'users', 'action' => 'view', $depreciatedItem['User']['id'])); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Quantity'); ?></td>
		<td>
			<?php echo h($depreciatedItem['DepreciatedItem']['quantity']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Title'); ?></td>
		<td>
			<?php echo h($depreciatedItem['DepreciatedItem']['title']); ?>
			&nbsp;
		</td>
	</tr>
		</table>
		
			</div>
</div>