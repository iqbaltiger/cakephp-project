<!-- Actions -->
<div class="header bg-light b-b b-light text-right">
	<div class="btn-group">
		<div class="btn btn-default btn-icon">
			<i class="icon-large icon-list "></i>
		</div>
		<?php echo $this->Html->link(__('Authorized Menu List'), array('action' => 'index'),array('class' => 'btn btn-default')); ?>
	</div>
	
	<div class="btn-group">
		<div class="btn">
			<i class="icon-large icon-plus "></i>
		</div>
		<?php echo $this->Html->link(__('Add New Authorized Menu'), array('action' => 'add'),array('class' => 'btn btn-primary')); ?>
	</div>
</div>
<!-- Panel -->
<div class="widget">
	<div class="widget-header">
		<i class="icon-bookmark"></i>
		<h3><?php echo __('Authorized Menus'); ?>
</h3>
	</div>
	<div class="widget-content">
		<table class="table table-striped table-bordered  table-hover">
			<thead>
				<tr>
<!--					<th><?php //echo $this->Paginator->sort('id', null, array('class'=>'')); ?></th>-->
					<th><?php echo $this->Paginator->sort('role_id', null, array('class'=>'')); ?></th>
					<th><?php echo $this->Paginator->sort('name', null, array('class'=>'')); ?></th>
					<th><?php echo $this->Paginator->sort('parent_id', null, array('class'=>'')); ?></th>
					<th><?php echo $this->Paginator->sort('dominion_id', null, array('class'=>'')); ?></th>
					<th><?php echo $this->Paginator->sort('process_id', null, array('class'=>'')); ?></th>
					<th><?php echo $this->Paginator->sort('icon', null, array('class'=>'')); ?></th>
					<th><?php echo $this->Paginator->sort('status', null, array('class'=>'')); ?></th>
					<th><?php echo $this->Paginator->sort('position', null, array('class'=>'')); ?></th>
					<th><i class="icon-large icon-cog "></i></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($authorizedMenus as $authorizedMenu): ?>
					<tr>
<!--						<td><?php //echo h($authorizedMenu['AuthorizedMenu']['id']); ?>&nbsp;</td>-->
						<td>
							<?php echo $this->Html->link($authorizedMenu['Role']['name'], array('controller' => 'roles', 'action' => 'view', $authorizedMenu['Role']['id'])); ?>
						</td>
						<td><?php echo h($authorizedMenu['AuthorizedMenu']['name']); ?>&nbsp;</td>
						<td>
							<?php echo $this->Html->link($authorizedMenu['ParentAuthorizedMenu']['name'], array('controller' => 'authorized_menus', 'action' => 'view', $authorizedMenu['ParentAuthorizedMenu']['id'])); ?>
						</td>
						<td>
							<?php echo $this->Html->link($authorizedMenu['Dominion']['name'], array('controller' => 'dominions', 'action' => 'view', $authorizedMenu['Dominion']['id'])); ?>
						</td>
						<td>
							<?php echo $this->Html->link($authorizedMenu['Process']['name'], array('controller' => 'processes', 'action' => 'view', $authorizedMenu['Process']['id'])); ?>
						</td>
						<td><?php echo $authorizedMenu['AuthorizedMenu']['icon']; ?>&nbsp;</td>
						<td><?php echo h($authorizedMenu['AuthorizedMenu']['status']); ?>&nbsp;</td>
						<td><?php echo h($authorizedMenu['AuthorizedMenu']['position']); ?>&nbsp;</td>
						<td>
							<?php echo $this->Html->link('<i class="icon-large icon-eye-open"></i>', array('action' => 'view', $authorizedMenu['AuthorizedMenu']['id']),array('class'=>'btn btn-rounded btn-small btn-icon btn-primary', 'escape'=>false)); ?>
							<?php echo $this->Html->link('<i class="icon-large icon-edit"></i> ', array('action' => 'edit', $authorizedMenu['AuthorizedMenu']['id']),array('class'=>'btn btn-rounded btn-small btn-icon btn-info','escape'=>false)); ?>
							<?php echo $this->Form->postLink('<i class="icon-large icon-trash"></i>', array('action' => 'delete', $authorizedMenu['AuthorizedMenu']['id']), array('class'=>'btn btn-rounded btn-small btn-icon btn-danger', 'escape'=>false), __('Are you sure?')); ?>
						</td>
					</tr>
					<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	<div class="widget-footer">
		<?php if($this->Paginator->counter('{:pages}') > 1) : ?>
		<div class="panel-footer">
			<div class="row">
				<span class="col-md-5"> 
					<?php echo $this->Paginator->counter('page {:page} of pages {:pages}');?>
				</span>
				<span class="col-md-7 text-right">
					<ul class="pagination pagination-sm ">
					<?php
					echo $this->Paginator->prev('&laquo;', array('tag'=>'li','escape'=>false,'class' => 'ajax_page'), null, array('class' => 'disabled','tag'=>'li','disabledTag'=>'a','escape'=>false));
					echo $this->Paginator->numbers(array('separator' => '','tag'=>'li','currentTag'=>'a','currentClass'=>'active','class' => 'ajax_page'));
					echo $this->Paginator->next('&raquo;', array('tag'=>'li','escape'=>false,'class' => 'ajax_page'), null, array('class' => 'disabled','tag'=>'li','escape'=>false,'disabledTag'=>'a'));
				?>
					</ul>
				</span>
			</div>
		</div>
		<?php endif; ?>
	</div>
</div>
