<div class="header bg-light b-b b-light text-right">
	<div class="btn-group">
		<div class="btn btn-sm btn-default btn-icon">
			<i class="icon-large icon-list "></i>
		</div>
		<?php echo $this->Html->link(__('Requisition List'), array('action' => 'index'),array('class' => 'btn btn-sm btn-default ajax_page')); ?>
	</div>
</div>
<!-- Panel -->
<div class="widget">
	<div class="widget-header">
		<i class="icon-bookmark"></i>
		<h3><?php echo __('Requisitions'); ?>
</h3>
	</div>
	<div class="widget-content">
            
            
                <div class="row-fluid">
                
                <div class="span6">
                      <div class="span2">Department:</div>
                   
                    <div class="span3">
                       <?php echo $this->Form->input('department_id',array('class'=>'form-control','div'=>'form-group','label'=>false,'empty'=>'Select Your Department')); ?>
                        
                        
                    
                     </div>  
                      
                      
                      <div class="span2">Item:</div>
                   
                    <div class="span3">
                    <select>
                        <option>Select Your Item</option>
                        <option>Item1</option>
                        <option>Item2</option>
                        <option>Item3</option>
                        <option>Item4</option>
                    </select>
                    
                     </div>  
                      
                      
                    <div class="span2">User:</div>
                    
                    <div class="span3">
                        
                        <select>
                            <option>Select User</option>
                            <option>Admin</option>
                            <option>CEO</option>
                            <option>MD</option>
                            <option>Leo</option>
                            <option>Iqbal</option>
                            
                            
                        </select>
                        
                        <?php //echo $this->Form->input('user_id',array('class'=>'form-control','div'=>'form-group','label'=>false)); ?>
                        
                    </div>
                    
                    
                    
                   
                    
                    
                    
                     
                    
                    
                    
                    
                    </div>
                    
                      <div class="span6">
                      <div class="span2">Quantity:</div>
                   
                    <div class="span3">
                       <?php echo $this->Form->input('quantity',array('class'=>'form-control','div'=>'form-group','label'=>false,'type'=>'number')); ?>
                        
                        
                    
                     </div>  
                      
                      
                     
                      
                      
                    <div class="span2">Approval Quantity:</div>
                    
                    <div class="span3">
                        
                        <input type="number">
                        
                        <?php //echo $this->Form->input('user_id',array('class'=>'form-control','div'=>'form-group','label'=>false)); ?>
                        
                    </div>
                    
                    
                     <div class="span2">Status:</div>
                    
                    <div class="span3">
                        
                        <select>
                            
                            <option>Select Your Status:</option>
                            <option>Active</option>
                             <option>Draft</option>
                        </select>
                        
                    </div>
                    
                    
                    
                    
                    
                    </div>
                    
                    
                   
                    
                    
                    
                </div>
            
            
            <style type="text/css">
                
                textarea{width:570px;}
            </style>
            
            
            <div class="row-fluid">
                
                 <div class="span12">
                        <div class="span2">Description:</div>
                        
                        <div class="span9">
                            
                            <textarea rows="8"></textarea>
                        </div>
                        
                    </div>
                
            </div>
            
            <p>&nbsp;</p>
            
            <div class="row-fluid">
                
                <div class="span4">&nbsp;</div>
                <div class="span4"><?php
                
                echo $this->Form->submit('Submit',array('class'=>'btn btn-success','label'=>false,'div'=>false));
                
                echo $this->Form->input('Cancel',array('type'=>'reset','class'=>'btn btn-warning left-shift-reset','between'=>false,'after'=>false,'label'=>false,'div'=>false,'style'=>'margin-left:10px;'));
                ?></div>
                <div class="span4">&nbsp;</div>
            </div>
            
            
		<?php echo $this->Form->create('Requisition',array('role'=>'form','class'=>'')); ?>
		<?php
			//echo $this->Form->input('department_id',array('class'=>'form-control','div'=>'form-group'));
			//echo $this->Form->input('item_id',array('class'=>'form-control','div'=>'form-group'));
			//echo $this->Form->input('user_id',array('class'=>'form-control','div'=>'form-group'));
			//echo $this->Form->input('quantity',array('class'=>'form-control','div'=>'form-group'));
			//echo $this->Form->input('description',array('class'=>'form-control','div'=>'form-group'));
			//echo $this->Form->input('approval_quantity',array('class'=>'form-control','div'=>'form-group'));
			//echo $this->Form->input('status',array('class'=>'form-control','div'=>'form-group'));
			//echo $this->Form->submit('Submit',array('class'=>'btn btn-success','label'=>false,'div'=>false));
			//echo $this->Form->input('Cancel',array('type'=>'reset','class'=>'btn btn-warning left-shift-reset','between'=>false,'after'=>false,'label'=>false,'div'=>false));
			?>

		<?php echo $this->Form->end(); ?>
	</div>
</div>
