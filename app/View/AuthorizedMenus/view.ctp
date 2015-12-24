<!-- Actions -->
<div class="header bg-light b-b b-light text-right">
	<div class="btn-group">
		<div class="btn btn-sm btn-default btn-icon">
			<i class="icon-large icon-arrow-left "></i>
		</div>
		<?php echo $this->Html->link(__('Back To Authorized Menus List'), array('action' => 'index'),array('class' => 'btn btn-default')); ?> 
	</div>
	
	<div class="btn-group">
		<div class="btn btn-dark btn-icon">
			<i class="icon-large icon-edit"></i>
		</div>
		<?php echo $this->Html->link(__('Edit Authorized Menu'), array('action' => 'edit', $authorizedMenu['AuthorizedMenu']['id']),array('class' => 'btn btn-info')); ?>
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
				<i class="icon-large icon-bar-chart"></i>
			</div>
			<?php echo $this->Html->link(__('Authorized Menus List'), array('controller' => 'authorized_menus', 'action' => 'index'),array('class' => 'btn btn-sm btn-primary')); ?> 
		</div>
		
		<div class="btn-group">
			<div class="btn btn-sm btn-dark btn-icon">
				<i class="icon-large icon-plus"></i>
			</div>
			<?php echo $this->Html->link(__('Add New Parent Authorized Menu'), array('controller' => 'authorized_menus', 'action' => 'add'),array('class' => 'btn btn-sm btn-primary')); ?> 
		</div>
	
			
		<div class="btn-group">
			<div class="btn btn-sm btn-dark btn-icon">
				<i class="icon-large icon-bar-chart"></i>
			</div>
			<?php echo $this->Html->link(__('Dominions List'), array('controller' => 'dominions', 'action' => 'index'),array('class' => 'btn btn-sm btn-primary')); ?> 
		</div>
		
		<div class="btn-group">
			<div class="btn btn-sm btn-dark btn-icon">
				<i class="icon-large icon-plus"></i>
			</div>
			<?php echo $this->Html->link(__('Add New Dominion'), array('controller' => 'dominions', 'action' => 'add'),array('class' => 'btn btn-sm btn-primary')); ?> 
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
		<?php echo $this->Form->postLink(__('Delete Authorized Menu'), array('action' => 'delete', $authorizedMenu['AuthorizedMenu']['id']),array('class' => 'btn btn-sm btn-danger'), __('Are you sure?')); ?>
	</div>
</div>
<div class="widget">
	<div class="widget-header">
		<i class="icon-bookmark"></i>
		<h3><?php echo __('Authorized Menus'); ?>
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
			<?php echo h($authorizedMenu['AuthorizedMenu']['id']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Role ID'); ?></td>
		<td>
			<?php echo h($authorizedMenu['AuthorizedMenu']['role_id']); ?>
		</td>
	</tr>
	<tr>
		<td><?php echo __('Name'); ?></td>
		<td>
			<?php echo h($authorizedMenu['AuthorizedMenu']['name']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Parent Authorized Menu'); ?></td>
		<td>
			<?php echo $this->Html->link($authorizedMenu['ParentAuthorizedMenu']['name'], array('controller' => 'authorized_menus', 'action' => 'view', $authorizedMenu['ParentAuthorizedMenu']['id'])); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Dominion'); ?></td>
		<td>
			<?php echo $this->Html->link($authorizedMenu['Dominion']['name'], array('controller' => 'dominions', 'action' => 'view', $authorizedMenu['Dominion']['id'])); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Process'); ?></td>
		<td>
			<?php echo $this->Html->link($authorizedMenu['Process']['name'], array('controller' => 'processes', 'action' => 'view', $authorizedMenu['Process']['id'])); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Icon'); ?></td>
		<td>
			<?php echo $authorizedMenu['AuthorizedMenu']['icon']; ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Status'); ?></td>
		<td>
			<?php echo h($authorizedMenu['AuthorizedMenu']['status']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Order'); ?></td>
		<td>
			<?php echo h($authorizedMenu['AuthorizedMenu']['position']); ?>
			&nbsp;
		</td>
	</tr>
		</table>
		
					<div class="related table-responsive">
				<h4>
					<?php echo 'Related Authorized Menus'; ?>					 <span class='label label-success'><?php echo sizeof($authorizedMenu['ChildAuthorizedMenu']); ?> </span>				</h4>
				<?php if (!empty($authorizedMenu['ChildAuthorizedMenu'])): ?>
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
			<?php foreach ($authorizedMenu['ChildAuthorizedMenu'] as $childAuthorizedMenu): ?>
		<tr>
			<td><?php echo $childAuthorizedMenu['id']; ?></td>
			<td><?php echo $childAuthorizedMenu['role_id']; ?></td>
			<td><?php echo $childAuthorizedMenu['name']; ?></td>
			<td><?php echo $childAuthorizedMenu['parent_id']; ?></td>
			<td><?php echo $childAuthorizedMenu['dominion_id']; ?></td>
			<td><?php echo $childAuthorizedMenu['process_id']; ?></td>
			<td><?php echo $childAuthorizedMenu['icon']; ?></td>
			<td><?php echo $childAuthorizedMenu['status']; ?></td>
			<td><?php echo $childAuthorizedMenu['order']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link('<i class="icon-large icon-eye-open"></i>', array('controller' => 'authorized_menus', 'action' => 'view', $childAuthorizedMenu['id']),array('class'=>'btn btn-rounded btn-sm btn-icon btn-primary ajax_page', 'data-toggle'=>'modal', 'data-target'=> '#modal', 'escape'=>false)); ?>
				<?php echo $this->Html->link('<i class="icon-large icon-edit"></i> ', array('controller' => 'authorized_menus', 'action' => 'edit', $childAuthorizedMenu['id']),array('class'=>'btn btn-rounded btn-sm btn-icon btn-info ajax_page', 'data-toggle'=>'modal', 'data-target'=> '#modal', 'escape'=>false)); ?>
				<?php echo $this->Form->postLink(__('<i class="icon-large icon-trash"></i>'), array('controller' => 'authorized_menus', 'action' => 'delete', $childAuthorizedMenu['id']), array('class'=>'btn btn-rounded btn-small btn-icon btn-danger', 'escape'=>false), __('Are you sure you want to delete # %s?', $childAuthorizedMenu['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
			</table>
		<?php endif; ?>

			
		</div>
			</div>
</div>