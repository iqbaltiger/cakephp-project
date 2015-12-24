<!-- Actions -->
<div class="header bg-light b-b b-light text-right">
	<div class="btn-group">
		<div class="btn btn-default btn-icon">
			<i class="icon-large icon-list "></i>
		</div>
		<?php echo $this->Html->link(__('Task Assign List'), array('action' => 'index'),array('class' => 'btn btn-default')); ?>
	</div>
	
	<div class="btn-group">
		<div class="btn">
			<i class="icon-large icon-plus "></i>
		</div>
		<?php echo $this->Html->link(__('Add New Task Assign'), array('action' => 'add'),array('class' => 'btn btn-primary')); ?>
	</div>
</div>
<!-- Panel -->
<div class="widget">
	<div class="widget-header">
		<i class="icon-bookmark"></i>
		<h3><?php echo __('Task Assigns'); ?>
</h3>
	</div>
	<div class="widget-content">
		<table class="table table-striped table-bordered  table-hover">
			<thead>
				<tr>
											<th><?php echo $this->Paginator->sort('id', null, array('class'=>'')); ?></th>
											<th><?php echo $this->Paginator->sort('user_id', null, array('class'=>'')); ?></th>
											<th><?php echo $this->Paginator->sort('task_id', null, array('class'=>'')); ?></th>
											<th><?php echo $this->Paginator->sort('note', null, array('class'=>'')); ?></th>
											<th><?php echo $this->Paginator->sort('working_hour', null, array('class'=>'')); ?></th>
											<th><?php echo $this->Paginator->sort('start_date', null, array('class'=>'')); ?></th>
											<th><?php echo $this->Paginator->sort('end_date', null, array('class'=>'')); ?></th>
											<th><?php echo $this->Paginator->sort('from_assign', null, array('class'=>'')); ?></th>
											<th><?php echo $this->Paginator->sort('department_id', null, array('class'=>'')); ?></th>
										<th><i class="icon-large icon-cog "></i></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($taskAssigns as $taskAssign): ?>
					<tr>
						<td><?php echo h($taskAssign['TaskAssign']['id']); ?>&nbsp;</td>
						<td>
							<?php echo $this->Html->link($taskAssign['User']['id'], array('controller' => 'users', 'action' => 'view', $taskAssign['User']['id'])); ?>
						</td>
						<td>
							<?php echo $this->Html->link($taskAssign['Task']['name'], array('controller' => 'tasks', 'action' => 'view', $taskAssign['Task']['id'])); ?>
						</td>
						<td><?php echo h($taskAssign['TaskAssign']['note']); ?>&nbsp;</td>
						<td><?php echo h($taskAssign['TaskAssign']['working_hour']); ?>&nbsp;</td>
						<td><?php echo h($taskAssign['TaskAssign']['start_date']); ?>&nbsp;</td>
						<td><?php echo h($taskAssign['TaskAssign']['end_date']); ?>&nbsp;</td>
						<td><?php echo h($taskAssign['TaskAssign']['from_assign']); ?>&nbsp;</td>
						<td>
							<?php echo $this->Html->link($taskAssign['Department']['name'], array('controller' => 'departments', 'action' => 'view', $taskAssign['Department']['id'])); ?>
						</td>
						<td>
							<?php echo $this->Html->link('<i class="icon-large icon-eye-open"></i>', array('action' => 'view', $taskAssign['TaskAssign']['id']),array('class'=>'btn btn-rounded btn-small btn-icon btn-primary', 'escape'=>false)); ?>
							<?php echo $this->Html->link('<i class="icon-large icon-edit"></i> ', array('action' => 'edit', $taskAssign['TaskAssign']['id']),array('class'=>'btn btn-rounded btn-small btn-icon btn-info','escape'=>false)); ?>
							<?php echo $this->Form->postLink('<i class="icon-large icon-trash"></i>', array('action' => 'delete', $taskAssign['TaskAssign']['id']), array('class'=>'btn btn-rounded btn-small btn-icon btn-danger', 'escape'=>false), __('Are you sure?')); ?>
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
