<!-- Actions -->
<div class="header bg-light b-b b-light text-right">
	<div class="btn-group">
		<div class="btn btn-default btn-icon">
			<i class="icon-large icon-list "></i>
		</div>
		<?php //echo $this->Html->link(__('Task List'), array('action' => 'index'),array('class' => 'btn btn-default')); ?>
	</div>
	
	<div class="btn-group">
		<div class="btn">
			<i class="icon-large icon-plus "></i>
		</div>
            
                <?php //echo $this->Html->link(__('Add New Task'), array('action' => 'add'),array('class' => 'btn btn-primary ajax_page','data-target'=>'#modal','data-toggle'=>'modal',)); ?>
		<?php //echo $this->Html->link(__('Add New Task'), array('action' => 'regulartask'),array('class' => 'btn btn-primary',)); ?>
	</div>
</div>
<!-- Panel -->
<div class="widget">
	<div class="widget-header">
		<i class="icon-bookmark"></i>
		<h3><?php echo __('Regular Tasks List'); ?>
</h3>
	</div>
	<div class="widget-content">
		<table class="table table-striped table-bordered  table-hover">
			<thead>
				<tr>
                                    <th>Task Name:</th>
                                    <th style="text-align:center">Action</th>
			            
				</tr>
			</thead>
			<tbody>
				<?php
                                //pr($regularTasks);
                                
                                foreach ($regularTasks as $regularTask): ?>
					<tr>
                                            <td><?php echo h($regularTask['RegularTask']['task_name']); ?></td>	
                                            
                                             <td style="text-align:center"><input type="checkbox"></td>
                                             
                                             
					</tr>
                                        
                                        
                                       <?php endforeach; ?>   
                                       
                                        
                                        <tr>
                                             
                                            <td style="text-align: center;border-right:0px;"><button class="btn btn-success" type="button">Save</button></td> 
                                            <td style="border-left: 0px;">&nbsp;</td>
                                        </tr>
                                        
                                        
                                      
					
			</tbody>
		</table>
	</div>
    
    
      <script src="//cdn.ckeditor.com/4.4.6/standard/ckeditor.js"></script>
    
   


<?php echo $this->element('admin/modal'); ?>


</div>
    
    
    
   
    
    
	<div class="widget-footer">
		<?php //if($this->Paginator->counter('{:pages}') > 1) : ?>
		<div class="panel-footer">
			<div class="row">
				<span class="col-md-5"> 
					<?php //echo $this->Paginator->counter('page {:page} of pages {:pages}');?>
				</span>
				<span class="col-md-7 text-right">
					<ul class="pagination pagination-sm ">
					<?php
					//echo $this->Paginator->prev('&laquo;', array('tag'=>'li','escape'=>false,'class' => 'ajax_page'), null, array('class' => 'disabled','tag'=>'li','disabledTag'=>'a','escape'=>false));
					//echo $this->Paginator->numbers(array('separator' => '','tag'=>'li','currentTag'=>'a','currentClass'=>'active','class' => 'ajax_page'));
					//echo $this->Paginator->next('&raquo;', array('tag'=>'li','escape'=>false,'class' => 'ajax_page'), null, array('class' => 'disabled','tag'=>'li','escape'=>false,'disabledTag'=>'a'));
				?>
					</ul>
				</span>
			</div>
		</div>
		<?php //endif; ?>
	</div>
</div>
