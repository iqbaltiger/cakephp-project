<!-- Actions -->
<div class="header bg-light b-b b-light text-right">
	<div class="btn-group">
		<div class="btn btn-default btn-icon">
			<i class="icon-large icon-list "></i>
		</div>
		<?php echo $this->Html->link(__('Regular Task List'), array('action' => 'regulartasklist'),array('class' => 'btn btn-default')); ?>
	</div>
    
      <div class="btn-group">
		<div class="btn btn-default btn-icon">
			<i class="icon-large icon-list "></i>
		</div>
		<?php echo $this->Html->link(__('Task List'), array('action' => 'index'),array('class' => 'btn btn-default')); ?>
	</div>
	
	<div class="btn-group">
		<div class="btn">
			<i class="icon-large icon-plus "></i>
		</div>
            
                <?php //echo $this->Html->link(__('Add New Task'), array('action' => 'add'),array('class' => 'btn btn-primary ajax_page','data-target'=>'#modal','data-toggle'=>'modal',)); ?>
		<?php echo $this->Html->link(__('Add New Task'), array('action' => 'add'),array('class' => 'btn btn-primary',)); ?>
	</div>
</div>
<!-- Panel -->
<div class="widget">
	<div class="widget-header">
		<i class="icon-bookmark"></i>
		<h3><?php echo __('Tasks'); ?>
</h3>
                
                <input type="text" name="search" placeholder="Search" class="search_box">    
                
                
                
	</div>
	<div class="widget-content">
		<table class="table table-striped table-bordered  table-hover">
			<thead>
				<tr>
											<th><?php echo $this->Paginator->sort('id', null, array('class'=>'')); ?></th>
<!--											<th><?php echo $this->Paginator->sort('parent_id', null, array('class'=>'')); ?></th>-->
											<th><?php echo $this->Paginator->sort('name', null, array('class'=>'')); ?></th>
<!--											<th><?php //echo $this->Paginator->sort('description', null, array('class'=>'')); ?></th>-->
<!--											<th><?php echo $this->Paginator->sort('priority', null, array('class'=>'')); ?></th>-->
<!--											<th><?php echo $this->Paginator->sort('attachment', null, array('class'=>'')); ?></th>-->
											<th><?php echo $this->Paginator->sort('working_hour', null, array('class'=>'')); ?></th>
											<th><?php echo $this->Paginator->sort('start_date', null, array('class'=>'')); ?></th>
											<th><?php echo $this->Paginator->sort('end_date', null, array('class'=>'')); ?></th>
											<th><?php echo $this->Paginator->sort('task_number', null, array('class'=>'')); ?></th>
										<th> <div class="left"><i class="icon-large icon-cog "></i></div>

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
				<?php foreach ($tasks as $task): ?>
					<tr>
						<td><?php echo h($task['Task']['id']); ?>&nbsp;</td>
<!--						<td>
							<?php echo $this->Html->link($task['ParentTask']['name'], array('controller' => 'tasks', 'action' => 'view', $task['ParentTask']['id'])); ?>
						</td>-->
						<td>
                                                    <?php
                                                    
                                                       echo $this->Html->link(
    h($task['Task']['name']),
    array('action' => 'view', $task['Task']['id'])
);
                                                    
                                                    ?>
                                                    
                                                    <?php //echo h($task['Task']['name']); ?>&nbsp;</td>
<!--						<td><?php //echo h($task['Task']['description']); ?>&nbsp;</td>-->
<!--						<td><?php echo h($task['Task']['priority']); ?>&nbsp;</td>-->
<!--						<td><?php echo h($task['Task']['attachment']); ?>&nbsp;</td>-->
						<td><?php echo h($task['Task']['working_hour']); ?>&nbsp;</td>
						<td><?php echo h($task['Task']['start_date']); ?>&nbsp;</td>
						<td><?php echo h($task['Task']['end_date']); ?>&nbsp;</td>
						<td><?php echo h($task['Task']['task_number']); ?>&nbsp;</td>
						<td>
							<?php echo $this->Html->link('<i class="icon-large icon-eye-open"></i>', array('action' => 'view', $task['Task']['id']),array('class'=>'btn btn-rounded btn-small btn-icon btn-primary', 'escape'=>false)); ?>
							<?php echo $this->Html->link('<i class="icon-large icon-edit"></i> ', array('action' => 'edit', $task['Task']['id']),array('class'=>'btn btn-rounded btn-small btn-icon btn-info','data-toggle'=>'modal','data-target'=>'#exampleModal','escape'=>false)); ?>
							<?php echo $this->Form->postLink('<i class="icon-large icon-trash"></i>', array('action' => 'delete', $task['Task']['id']), array('class'=>'btn btn-rounded btn-small btn-icon btn-danger', 'escape'=>false), __('Are you sure?')); ?>
						</td>
					</tr>
					<?php endforeach; ?>
			</tbody>
		</table>
	</div>
    
    
      <script src="//cdn.ckeditor.com/4.4.6/standard/ckeditor.js"></script>
    
   


<?php echo $this->element('admin/modal'); ?>


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
