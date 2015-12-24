<!-- Actions -->
<div class="header bg-light b-b b-light text-right">
	<div class="btn-group">
		<div class="btn btn-sm btn-default btn-icon">
			<i class="icon-large icon-arrow-left "></i>
		</div>
		<?php echo $this->Html->link(__('Back To Roles List'), array('action' => 'index'),array('class' => 'btn btn-default')); ?> 
	</div>
	
	<div class="btn-group">
		<div class="btn btn-dark btn-icon">
			<i class="icon-large icon-edit"></i>
		</div>
		<?php echo $this->Html->link(__('Edit Role'), array('action' => 'edit', $role['Role']['id']),array('class' => 'btn btn-info')); ?>
	</div>
	
			
		<div class="btn-group">
			<div class="btn btn-sm btn-dark btn-icon">
				<i class="icon-large icon-bar-chart"></i>
			</div>
			<?php echo $this->Html->link(__('Company Infos List'), array('controller' => 'company_infos', 'action' => 'index'),array('class' => 'btn btn-sm btn-primary')); ?> 
		</div>
		
		<div class="btn-group">
			<div class="btn btn-sm btn-dark btn-icon">
				<i class="icon-large icon-plus"></i>
			</div>
			<?php echo $this->Html->link(__('Add New Company Info'), array('controller' => 'company_infos', 'action' => 'add'),array('class' => 'btn btn-sm btn-primary')); ?> 
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
		<?php echo $this->Form->postLink(__('Delete Role'), array('action' => 'delete', $role['Role']['id']),array('class' => 'btn btn-sm btn-danger'), __('Are you sure?')); ?>
	</div>
</div>
<div class="widget">
	<div class="widget-header">
		<i class="icon-bookmark"></i>
		<h3><?php echo __('Roles'); ?>
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
			<?php echo h($role['Role']['id']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Company Info'); ?></td>
		<td>
			<?php echo $this->Html->link($role['CompanyInfo']['name'], array('controller' => 'company_infos', 'action' => 'view', $role['CompanyInfo']['id'])); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Name'); ?></td>
		<td>
			<?php echo h($role['Role']['name']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Slug'); ?></td>
		<td>
			<?php echo h($role['Role']['slug']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Status'); ?></td>
		<td>
			<?php echo h($role['Role']['status']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Created'); ?></td>
		<td>
			<?php echo h($role['Role']['created']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Modified'); ?></td>
		<td>
			<?php echo h($role['Role']['modified']); ?>
			&nbsp;
		</td>
	</tr>
		</table>
		
					<div class="related table-responsive">
				<h4>
					<?php echo 'Related Authorized Menus'; ?>					 <span class='label label-success'><?php echo sizeof($role['AuthorizedMenu']); ?> </span>				</h4>
				<?php if (!empty($role['AuthorizedMenu'])): ?>
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
			<?php foreach ($role['AuthorizedMenu'] as $authorizedMenu): ?>
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
					<?php echo 'Related Permissions'; ?>					 <span class='label label-success'><?php echo sizeof($role['Permission']); ?> </span>				</h4>
				<?php if (!empty($role['Permission'])): ?>
				<table class="table table-striped table-bordered  table-hover">
				<tr>
				<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Role Id'); ?></th>
		<th><?php echo __('Dominion Id'); ?></th>
		<th><?php echo __('Process Id'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
			<?php foreach ($role['Permission'] as $permission): ?>
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
					<?php echo 'Related Users'; ?>					 <span class='label label-success'><?php echo sizeof($role['User']); ?> </span>				</h4>
				<?php if (!empty($role['User'])): ?>
				<table class="table table-striped table-bordered  table-hover">
				<tr>
				<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Role Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Status'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
			<?php foreach ($role['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['email']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['role_id']; ?></td>
			<td><?php echo $user['created']; ?></td>
			<td><?php echo $user['modified']; ?></td>
			<td><?php echo $user['status']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link('<i class="icon-large icon-eye-open"></i>', array('controller' => 'users', 'action' => 'view', $user['id']),array('class'=>'btn btn-rounded btn-sm btn-icon btn-primary ajax_page', 'data-toggle'=>'modal', 'data-target'=> '#modal', 'escape'=>false)); ?>
				<?php echo $this->Html->link('<i class="icon-large icon-edit"></i> ', array('controller' => 'users', 'action' => 'edit', $user['id']),array('class'=>'btn btn-rounded btn-sm btn-icon btn-info ajax_page', 'data-toggle'=>'modal', 'data-target'=> '#modal', 'escape'=>false)); ?>
				<?php echo $this->Form->postLink(__('<i class="icon-large icon-trash"></i>'), array('controller' => 'users', 'action' => 'delete', $user['id']), array('class'=>'btn btn-rounded btn-small btn-icon btn-danger', 'escape'=>false), __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
			</table>
		<?php endif; ?>

			
		</div>
			</div>
</div>