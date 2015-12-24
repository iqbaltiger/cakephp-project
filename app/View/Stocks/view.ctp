<!-- Actions -->
<div class="header bg-light b-b b-light text-right">
	<div class="btn-group">
		<div class="btn btn-sm btn-default btn-icon">
			<i class="icon-large icon-arrow-left "></i>
		</div>
		<?php echo $this->Html->link(__('Back To Stocks List'), array('action' => 'index'),array('class' => 'btn btn-default')); ?> 
	</div>
	
	<div class="btn-group">
		<div class="btn btn-dark btn-icon">
			<i class="icon-large icon-edit"></i>
		</div>
		<?php echo $this->Html->link(__('Edit Stock'), array('action' => 'edit', $stock['Stock']['id']),array('class' => 'btn btn-info')); ?>
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
				<i class="icon-large icon-bar-chart"></i>
			</div>
			<?php echo $this->Html->link(__('Requisitions List'), array('controller' => 'requisitions', 'action' => 'index'),array('class' => 'btn btn-sm btn-primary')); ?> 
		</div>
		
		<div class="btn-group">
			<div class="btn btn-sm btn-dark btn-icon">
				<i class="icon-large icon-plus"></i>
			</div>
			<?php echo $this->Html->link(__('Add New Requisition'), array('controller' => 'requisitions', 'action' => 'add'),array('class' => 'btn btn-sm btn-primary')); ?> 
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
			<?php echo $this->Html->link(__('Depreciated Items List'), array('controller' => 'depreciated_items', 'action' => 'index'),array('class' => 'btn btn-sm btn-primary')); ?> 
		</div>
		
		<div class="btn-group">
			<div class="btn btn-sm btn-dark btn-icon">
				<i class="icon-large icon-plus"></i>
			</div>
			<?php echo $this->Html->link(__('Add New Depreciated Item'), array('controller' => 'depreciated_items', 'action' => 'add'),array('class' => 'btn btn-sm btn-primary')); ?> 
		</div>
	
			
		<div class="btn-group">
			<div class="btn btn-sm btn-dark btn-icon">
				<i class="icon-large icon-bar-chart"></i>
			</div>
			<?php echo $this->Html->link(__('Distributed Items List'), array('controller' => 'distributed_items', 'action' => 'index'),array('class' => 'btn btn-sm btn-primary')); ?> 
		</div>
		
		<div class="btn-group">
			<div class="btn btn-sm btn-dark btn-icon">
				<i class="icon-large icon-plus"></i>
			</div>
			<?php echo $this->Html->link(__('Add New Distributed Item'), array('controller' => 'distributed_items', 'action' => 'add'),array('class' => 'btn btn-sm btn-primary')); ?> 
		</div>
	
		
	
	<div class="btn-group">
		<div class="btn btn-sm btn-dark btn-icon">
			<i class="icon-large icon-trash "></i>
		</div>
		<?php echo $this->Form->postLink(__('Delete Stock'), array('action' => 'delete', $stock['Stock']['id']),array('class' => 'btn btn-sm btn-danger'), __('Are you sure?')); ?>
	</div>
</div>
<div class="widget">
	<div class="widget-header">
		<i class="icon-bookmark"></i>
		<h3><?php echo __('Stocks'); ?>
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
			<?php echo h($stock['Stock']['id']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Item'); ?></td>
		<td>
			<?php echo $this->Html->link($stock['Item']['name'], array('controller' => 'items', 'action' => 'view', $stock['Item']['id'])); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Department'); ?></td>
		<td>
			<?php echo $this->Html->link($stock['Department']['name'], array('controller' => 'departments', 'action' => 'view', $stock['Department']['id'])); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Requisition'); ?></td>
		<td>
			<?php echo $this->Html->link($stock['Requisition']['id'], array('controller' => 'requisitions', 'action' => 'view', $stock['Requisition']['id'])); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Company Info'); ?></td>
		<td>
			<?php echo $this->Html->link($stock['CompanyInfo']['name'], array('controller' => 'company_infos', 'action' => 'view', $stock['CompanyInfo']['id'])); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Quantity'); ?></td>
		<td>
			<?php echo h($stock['Stock']['quantity']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Memo Number'); ?></td>
		<td>
			<?php echo h($stock['Stock']['memo_number']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Created'); ?></td>
		<td>
			<?php echo h($stock['Stock']['created']); ?>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td><?php echo __('Modified'); ?></td>
		<td>
			<?php echo h($stock['Stock']['modified']); ?>
			&nbsp;
		</td>
	</tr>
		</table>
		
					<div class="related table-responsive">
				<h4>
					<?php echo 'Related Depreciated Items'; ?>					 <span class='label label-success'><?php echo sizeof($stock['DepreciatedItem']); ?> </span>				</h4>
				<?php if (!empty($stock['DepreciatedItem'])): ?>
				<table class="table table-striped table-bordered  table-hover">
				<tr>
				<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Item Id'); ?></th>
		<th><?php echo __('Stock Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Quantity'); ?></th>
		<th><?php echo __('Title'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
			<?php foreach ($stock['DepreciatedItem'] as $depreciatedItem): ?>
		<tr>
			<td><?php echo $depreciatedItem['id']; ?></td>
			<td><?php echo $depreciatedItem['item_id']; ?></td>
			<td><?php echo $depreciatedItem['stock_id']; ?></td>
			<td><?php echo $depreciatedItem['user_id']; ?></td>
			<td><?php echo $depreciatedItem['quantity']; ?></td>
			<td><?php echo $depreciatedItem['title']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link('<i class="icon-large icon-eye-open"></i>', array('controller' => 'depreciated_items', 'action' => 'view', $depreciatedItem['id']),array('class'=>'btn btn-rounded btn-sm btn-icon btn-primary ajax_page', 'data-toggle'=>'modal', 'data-target'=> '#modal', 'escape'=>false)); ?>
				<?php echo $this->Html->link('<i class="icon-large icon-edit"></i> ', array('controller' => 'depreciated_items', 'action' => 'edit', $depreciatedItem['id']),array('class'=>'btn btn-rounded btn-sm btn-icon btn-info ajax_page', 'data-toggle'=>'modal', 'data-target'=> '#modal', 'escape'=>false)); ?>
				<?php echo $this->Form->postLink(__('<i class="icon-large icon-trash"></i>'), array('controller' => 'depreciated_items', 'action' => 'delete', $depreciatedItem['id']), array('class'=>'btn btn-rounded btn-small btn-icon btn-danger', 'escape'=>false), __('Are you sure you want to delete # %s?', $depreciatedItem['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
			</table>
		<?php endif; ?>

			
		</div>
					<div class="related table-responsive">
				<h4>
					<?php echo 'Related Distributed Items'; ?>					 <span class='label label-success'><?php echo sizeof($stock['DistributedItem']); ?> </span>				</h4>
				<?php if (!empty($stock['DistributedItem'])): ?>
				<table class="table table-striped table-bordered  table-hover">
				<tr>
				<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Item Id'); ?></th>
		<th><?php echo __('Stock Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Quantity'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
			<?php foreach ($stock['DistributedItem'] as $distributedItem): ?>
		<tr>
			<td><?php echo $distributedItem['id']; ?></td>
			<td><?php echo $distributedItem['item_id']; ?></td>
			<td><?php echo $distributedItem['stock_id']; ?></td>
			<td><?php echo $distributedItem['user_id']; ?></td>
			<td><?php echo $distributedItem['quantity']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link('<i class="icon-large icon-eye-open"></i>', array('controller' => 'distributed_items', 'action' => 'view', $distributedItem['id']),array('class'=>'btn btn-rounded btn-sm btn-icon btn-primary ajax_page', 'data-toggle'=>'modal', 'data-target'=> '#modal', 'escape'=>false)); ?>
				<?php echo $this->Html->link('<i class="icon-large icon-edit"></i> ', array('controller' => 'distributed_items', 'action' => 'edit', $distributedItem['id']),array('class'=>'btn btn-rounded btn-sm btn-icon btn-info ajax_page', 'data-toggle'=>'modal', 'data-target'=> '#modal', 'escape'=>false)); ?>
				<?php echo $this->Form->postLink(__('<i class="icon-large icon-trash"></i>'), array('controller' => 'distributed_items', 'action' => 'delete', $distributedItem['id']), array('class'=>'btn btn-rounded btn-small btn-icon btn-danger', 'escape'=>false), __('Are you sure you want to delete # %s?', $distributedItem['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
			</table>
		<?php endif; ?>

			
		</div>
			</div>
</div>