<!-- Actions -->
<div class="header bg-light b-b b-light text-right">
	<div class="btn-group">
		<div class="btn btn-default btn-icon">
			<i class="icon-large icon-list "></i>
		</div>
		<?php echo $this->Html->link(__('Requisition List'), array('action' => 'index'),array('class' => 'btn btn-default')); ?>
	</div>
	
	<div class="btn-group">
		<div class="btn">
			<i class="icon-large icon-plus "></i>
		</div>
		<?php echo $this->Html->link(__('Add New Requisition'), array('action' => 'add'),array('class' => 'btn btn-primary')); ?>
	</div>
</div>
<!-- Panel -->
<div class="widget">
	<div class="widget-header">
		<i class="icon-bookmark"></i>
		<h3><?php echo __('Requisitions'); ?>
</h3>
                
               <input type="text" name="search" placeholder="Search" class="search_box">     
	</div>
	<div class="widget-content">
		<table class="table table-striped table-bordered  table-hover">
			<thead>
				<tr>
											<th><?php echo $this->Paginator->sort('id', null, array('class'=>'')); ?></th>
											<th><?php echo $this->Paginator->sort('department_id', null, array('class'=>'')); ?></th>
											<th><?php echo $this->Paginator->sort('item_id', null, array('class'=>'')); ?></th>
											<th><?php echo $this->Paginator->sort('user_id', null, array('class'=>'')); ?></th>
											<th><?php echo $this->Paginator->sort('quantity', null, array('class'=>'')); ?></th>
											<th><?php echo $this->Paginator->sort('description', null, array('class'=>'')); ?></th>
											<th><?php echo $this->Paginator->sort('approval_quantity', null, array('class'=>'')); ?></th>
											<th><?php echo $this->Paginator->sort('status', null, array('class'=>'')); ?></th>
										<th><div class="left"><i class="icon-large icon-cog "></i></div>

            <div class="right">
                <?php
                echo $this->Html->image("pdf-icon.gif", array(
                    "alt" => "Brownies",
                    'url' => array('controller' => 'contr', 'action' => 'add')
                ));
                ?>

                <?php
                echo $this->Html->image("email-envelope.png", array(
                    "alt" => "Brownies",
                    'url' => array('controller' => 'contr', 'action' => 'add')
                ));
                ?>



            </div></th>
				</tr>
			</thead>
			<tbody>
				<?php //foreach ($requisitions as $requisition): ?>
					<tr>
						<td>1<?php //echo h($requisition['Requisition']['id']); ?>&nbsp;</td>
						<td>
							Marketing<?php //echo $this->Html->link($requisition['Department']['name'], array('controller' => 'departments', 'action' => 'view', $requisition['Department']['id'])); ?>
						</td>
						<td>
							Item4<?php //echo $this->Html->link($requisition['Item']['name'], array('controller' => 'items', 'action' => 'view', $requisition['Item']['id'])); ?>
						</td>
						<td>
							Leo<?php //echo $this->Html->link($requisition['User']['id'], array('controller' => 'users', 'action' => 'view', $requisition['User']['id'])); ?>
						</td>
						<td>10<?php //echo h($requisition['Requisition']['quantity']); ?>&nbsp;</td>
						<td>This is regarding the rear glass<?php //echo h($requisition['Requisition']['description']); ?>&nbsp;</td>
						<td>6<?php //echo h($requisition['Requisition']['approval_quantity']); ?>&nbsp;</td>
						<td>Active<?php //echo h($requisition['Requisition']['status']); ?>&nbsp;</td>
						<td>
							<?php echo $this->Html->link('<i class="icon-large icon-eye-open"></i>', array('action' => 'view'),array('class'=>'btn btn-rounded btn-small btn-icon btn-primary', 'escape'=>false)); ?>
							<?php echo $this->Html->link('<i class="icon-large icon-edit"></i> ', array('action' => 'edit'),array('class'=>'btn btn-rounded btn-small btn-icon btn-info','escape'=>false)); ?>
							<?php echo $this->Form->postLink('<i class="icon-large icon-trash"></i>', array('action' => 'delete'), array('class'=>'btn btn-rounded btn-small btn-icon btn-danger', 'escape'=>false), __('Are you sure?')); ?>
                                                    
                                                        <?php //echo $this->Html->link('<i class="icon-large icon-eye-open"></i>', array('action' => 'view', $requisition['Requisition']['id']),array('class'=>'btn btn-rounded btn-small btn-icon btn-primary', 'escape'=>false)); ?>
							<?php //echo $this->Html->link('<i class="icon-large icon-edit"></i> ', array('action' => 'edit', $requisition['Requisition']['id']),array('class'=>'btn btn-rounded btn-small btn-icon btn-info','escape'=>false)); ?>
							<?php //echo $this->Form->postLink('<i class="icon-large icon-trash"></i>', array('action' => 'delete', $requisition['Requisition']['id']), array('class'=>'btn btn-rounded btn-small btn-icon btn-danger', 'escape'=>false), __('Are you sure?')); ?>
						</td>
					</tr>
                                        
                                        <tr>
						<td>2<?php //echo h($requisition['Requisition']['id']); ?>&nbsp;</td>
						<td>
							Marketing<?php //echo $this->Html->link($requisition['Department']['name'], array('controller' => 'departments', 'action' => 'view', $requisition['Department']['id'])); ?>
						</td>
						<td>
							Item7<?php //echo $this->Html->link($requisition['Item']['name'], array('controller' => 'items', 'action' => 'view', $requisition['Item']['id'])); ?>
						</td>
						<td>
							Iqbal<?php //echo $this->Html->link($requisition['User']['id'], array('controller' => 'users', 'action' => 'view', $requisition['User']['id'])); ?>
						</td>
						<td>12<?php //echo h($requisition['Requisition']['quantity']); ?>&nbsp;</td>
						<td>This is regarding the front glass<?php //echo h($requisition['Requisition']['description']); ?>&nbsp;</td>
						<td>8<?php //echo h($requisition['Requisition']['approval_quantity']); ?>&nbsp;</td>
						<td>Draft<?php //echo h($requisition['Requisition']['status']); ?>&nbsp;</td>
						<td>
							<?php echo $this->Html->link('<i class="icon-large icon-eye-open"></i>', array('action' => 'view'),array('class'=>'btn btn-rounded btn-small btn-icon btn-primary', 'escape'=>false)); ?>
							<?php echo $this->Html->link('<i class="icon-large icon-edit"></i> ', array('action' => 'edit'),array('class'=>'btn btn-rounded btn-small btn-icon btn-info','escape'=>false)); ?>
							<?php echo $this->Form->postLink('<i class="icon-large icon-trash"></i>', array('action' => 'delete'), array('class'=>'btn btn-rounded btn-small btn-icon btn-danger', 'escape'=>false), __('Are you sure?')); ?>
                                                    
                                                        <?php //echo $this->Html->link('<i class="icon-large icon-eye-open"></i>', array('action' => 'view', $requisition['Requisition']['id']),array('class'=>'btn btn-rounded btn-small btn-icon btn-primary', 'escape'=>false)); ?>
							<?php //echo $this->Html->link('<i class="icon-large icon-edit"></i> ', array('action' => 'edit', $requisition['Requisition']['id']),array('class'=>'btn btn-rounded btn-small btn-icon btn-info','escape'=>false)); ?>
							<?php //echo $this->Form->postLink('<i class="icon-large icon-trash"></i>', array('action' => 'delete', $requisition['Requisition']['id']), array('class'=>'btn btn-rounded btn-small btn-icon btn-danger', 'escape'=>false), __('Are you sure?')); ?>
						</td>
					</tr>
					<?php //endforeach; ?>
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
