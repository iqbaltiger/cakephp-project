<!-- Actions -->
<div class="header bg-light b-b b-light text-right">
	<div class="btn-group">
		<div class="btn btn-sm btn-default btn-icon">
			<i class="icon-large icon-arrow-left "></i>
		</div>
		<?php echo $this->Html->link(__('Back To Dominions List'), array('action' => 'index'),array('class' => 'btn btn-default')); ?> 
	</div>
	
	<div class="btn-group">
		<div class="btn btn-dark btn-icon">
			<i class="icon-large icon-edit"></i>
		</div>
		<?php echo $this->Html->link(__('Edit Dominion'), array('action' => 'edit', $dominion['Dominion']['id']),array('class' => 'btn btn-info')); ?>
	</div>
	
			
		<div class="btn-group">
			<div class="btn btn-sm btn-dark btn-icon">
				<i class="icon-large icon-bar-chart"></i>
			</div>
			<?php echo $this->Html->link(__('Authorized Menus List'), array('controller' => 'authorized_menus', 'action' => 'index'),array('class' => 'btn btn-sm btn-primary')); ?> 
		</div>
		
		<div class="btn-group">
			<div class="btn btn-sm btn-dark btn-icon">
				<i class="icon-large icon-plus"></i>
			</div>
			<?php echo $this->Html->link(__('Add New Authorized Menu'), array('controller' => 'authorized_menus', 'action' => 'add'),array('class' => 'btn btn-sm btn-primary')); ?> 
		</div>
	
			
		<div class="btn-group">
			<div class="btn btn-sm btn-dark btn-icon">
				<i class="icon-large icon-bar-chart"></i>
			</div>
			<?php echo $this->Html->link(__('Permissions List'), array('controller' => 'permissions', 'action' => 'index'),array('class' => 'btn btn-sm btn-primary')); ?> 
		</div>
		
		<div class="btn-group">
			<div class="btn btn-sm btn-dark btn-icon">
				<i class="icon-large icon-plus"></i>
			</div>
			<?php echo $this->Html->link(__('Add New Permission'), array('controller' => 'permissions', 'action' => 'add'),array('class' => 'btn btn-sm btn-primary')); ?> 
		</div>
	
			
		<div class="btn-group">
			<div class="btn btn-sm btn-dark btn-icon">
				<i class="icon-large icon-bar-chart"></i>
			</div>
			<?php echo $this->Html->link(__('Processes List'), array('controller' => 'processes', 'action' => 'index'),array('class' => 'btn btn-sm btn-primary')); ?> 
		</div>
		
		<div class="btn-group">
			<div class="btn btn-sm btn-dark btn-icon">
				<i class="icon-large icon-plus"></i>
			</div>
			<?php echo $this->Html->link(__('Add New Process'), array('controller' => 'processes', 'action' => 'add'),array('class' => 'btn btn-sm btn-primary')); ?> 
		</div>
	
		
	
	<div class="btn-group">
		<div class="btn btn-sm btn-dark btn-icon">
			<i class="icon-large icon-trash "></i>
		</div>
		<?php echo $this->Form->postLink(__('Delete Dominion'), array('action' => 'delete', $dominion['Dominion']['id']),array('class' => 'btn btn-sm btn-danger'), __('Are you sure?')); ?>
	</div>
</div>
<div class="widget">
	<div class="widget-header">
		<i class="icon-bookmark"></i>
		<h3><?php echo __('Dominions'); ?>
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
			<?php echo h($dominion['Dominion']['id']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Name'); ?></td>
		<td>
			<?php echo h($dominion['Dominion']['name']); ?>
			&nbsp;
		</td>
	</tr>
		</table>
		
					<div class="related table-responsive">
				<h4>
					<?php echo 'Related Authorized Menus'; ?>					 <span class='label label-success'><?php echo sizeof($dominion['AuthorizedMenu']); ?> </span>				</h4>
				<?php if (!empty($dominion['AuthorizedMenu'])): ?>
				<table class="table table-striped table-bordered  table-hover">
				<tr>
				<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Role Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th><?php echo __('Dominion Id'); ?></th>
		<th><?php echo __('Process Id'); ?></th>
		<th><?php echo __('Icon'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Order'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
			<?php foreach ($dominion['AuthorizedMenu'] as $authorizedMenu): ?>
		<tr>
			<td><?php echo $authorizedMenu['id']; ?></td>
			<td><?php echo $authorizedMenu['role_id']; ?></td>
			<td><?php echo $authorizedMenu['name']; ?></td>
			<td><?php echo $authorizedMenu['parent_id']; ?></td>
			<td><?php echo $authorizedMenu['dominion_id']; ?></td>
			<td><?php echo $authorizedMenu['process_id']; ?></td>
			<td><?php echo $authorizedMenu['icon']; ?></td>
			<td><?php echo $authorizedMenu['status']; ?></td>
			<td><?php echo $authorizedMenu['order']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link('<i class="icon-large icon-eye-open"></i>', array('controller' => 'authorized_menus', 'action' => 'view', $authorizedMenu['id']),array('class'=>'btn btn-rounded btn-sm btn-icon btn-primary ajax_page', 'data-toggle'=>'modal', 'data-target'=> '#modal', 'escape'=>false)); ?>
				<?php echo $this->Html->link('<i class="icon-large icon-edit"></i> ', array('controller' => 'authorized_menus', 'action' => 'edit', $authorizedMenu['id']),array('class'=>'btn btn-rounded btn-sm btn-icon btn-info ajax_page', 'data-toggle'=>'modal', 'data-target'=> '#modal', 'escape'=>false)); ?>
				<?php echo $this->Form->postLink(__('<i class="icon-large icon-trash"></i>'), array('controller' => 'authorized_menus', 'action' => 'delete', $authorizedMenu['id']), array('class'=>'btn btn-rounded btn-small btn-icon btn-danger', 'escape'=>false), __('Are you sure you want to delete # %s?', $authorizedMenu['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
			</table>
		<?php endif; ?>

			
		</div>
					<div class="related table-responsive">
				<h4>
					<?php echo 'Related Permissions'; ?>					 <span class='label label-success'><?php echo sizeof($dominion['Permission']); ?> </span>				</h4>
				<?php if (!empty($dominion['Permission'])): ?>
				<table class="table table-striped table-bordered  table-hover">
				<tr>
				<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Role Id'); ?></th>
		<th><?php echo __('Dominion Id'); ?></th>
		<th><?php echo __('Process Id'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
			<?php foreach ($dominion['Permission'] as $permission): ?>
		<tr>
			<td><?php echo $permission['id']; ?></td>
			<td><?php echo $permission['role_id']; ?></td>
			<td><?php echo $permission['dominion_id']; ?></td>
			<td><?php echo $permission['process_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link('<i class="icon-large icon-eye-open"></i>', array('controller' => 'permissions', 'action' => 'view', $permission['id']),array('class'=>'btn btn-rounded btn-sm btn-icon btn-primary ajax_page', 'data-toggle'=>'modal', 'data-target'=> '#modal', 'escape'=>false)); ?>
				<?php echo $this->Html->link('<i class="icon-large icon-edit"></i> ', array('controller' => 'permissions', 'action' => 'edit', $permission['id']),array('class'=>'btn btn-rounded btn-sm btn-icon btn-info ajax_page', 'data-toggle'=>'modal', 'data-target'=> '#modal', 'escape'=>false)); ?>
				<?php echo $this->Form->postLink(__('<i class="icon-large icon-trash"></i>'), array('controller' => 'permissions', 'action' => 'delete', $permission['id']), array('class'=>'btn btn-rounded btn-small btn-icon btn-danger', 'escape'=>false), __('Are you sure you want to delete # %s?', $permission['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
			</table>
		<?php endif; ?>

			
		</div>
					<div class="related table-responsive">
				<h4>
					<?php echo 'Related Processes'; ?>					 <span class='label label-success'><?php echo sizeof($dominion['Process']); ?> </span>				</h4>
				<?php if (!empty($dominion['Process'])): ?>
				<table class="table table-striped table-bordered  table-hover">
				<tr>
				<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Dominion Id'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
			<?php foreach ($dominion['Process'] as $process): ?>
		<tr>
			<td><?php echo $process['id']; ?></td>
			<td><?php echo $process['name']; ?></td>
			<td><?php echo $process['dominion_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link('<i class="icon-large icon-eye-open"></i>', array('controller' => 'processes', 'action' => 'view', $process['id']),array('class'=>'btn btn-rounded btn-sm btn-icon btn-primary ajax_page', 'data-toggle'=>'modal', 'data-target'=> '#modal', 'escape'=>false)); ?>
				<?php echo $this->Html->link('<i class="icon-large icon-edit"></i> ', array('controller' => 'processes', 'action' => 'edit', $process['id']),array('class'=>'btn btn-rounded btn-sm btn-icon btn-info ajax_page', 'data-toggle'=>'modal', 'data-target'=> '#modal', 'escape'=>false)); ?>
				<?php echo $this->Form->postLink(__('<i class="icon-large icon-trash"></i>'), array('controller' => 'processes', 'action' => 'delete', $process['id']), array('class'=>'btn btn-rounded btn-small btn-icon btn-danger', 'escape'=>false), __('Are you sure you want to delete # %s?', $process['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
			</table>
		<?php endif; ?>

			
		</div>
			</div>
</div>