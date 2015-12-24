<div class="header bg-light b-b b-light text-right">
	<div class="btn-group">
		<div class="btn btn-sm btn-default btn-icon">
			<i class="icon-large icon-list "></i>
		</div>
		<?php echo $this->Html->link(__('Inventory List'), array('action' => 'index'),array('class' => 'btn btn-sm btn-default ajax_page')); ?>
	</div>
</div>
<!-- Panel -->
<div class="widget">
	<div class="widget-header">
		<i class="icon-bookmark"></i>
		<h3><?php echo __('Inventory'); ?>
</h3>
	</div>
	<div class="widget-content">
            
            <div class="row-fluid">
                
                <div class="span6">
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
                        
                     
                    
                    <div class="span2">Requisition:</div>
                   
                    <div class="span3">
                       <?php //echo $this->Form->input('requisition_id',array('class'=>'form-control','div'=>'form-group','label'=>false)); ?>
                        
                        <select>
                            <option>Select Your Requisition</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    
                     </div>  
                 
                   
                        
                <div class="span2">Quantity:</div>
                   
                    <div class="span3">
                       <?php echo $this->Form->input('quantity',array('class'=>'form-control','div'=>'form-group','label'=>false,'type'=>'number')); ?>
                        
                       
                    
                     </div>  
                    
                    
                    
                    
                </div>
                
                
                
                 <div class="span6">
                    <div class="span2">Company Info:</div>
                   
                    <div class="span3">
                       <?php echo $this->Form->input('company_info_id',array('class'=>'form-control','div'=>'form-group','label'=>false)); ?>
                    
                     </div>    
                        
                    
                       <div class="span2">Department:</div>
                   
                    <div class="span3">
                       <?php echo $this->Form->input('department_id',array('class'=>'form-control','div'=>'form-group','label'=>false)); ?>
                        
                        
                    
                     </div>   
                        
                    
                       
                       
                       <div class="span2">Memo Number:</div>
                   
                    <div class="span3">
                       <?php echo $this->Form->input('memo_number',array('class'=>'form-control','div'=>'form-group','label'=>false)); ?>
                        
                       
                    
                     </div>  
                    
                </div>
                
                
            
            </div>
            
            <p>&nbsp;</p>
            <div class="row-fluid">
                <div class="span5">&nbsp;</div>
                <div class="span3">
                    
                    <?php
                      echo $this->Form->submit('Submit',array('class'=>'btn btn-success','label'=>false,'div'=>false));
                      
                    ?>
                    
                </div>
                <div class="span4">&nbsp;</div>
                
            </div>
            
              
		<?php echo $this->Form->create('Stock',array('role'=>'form','class'=>'')); ?>
		<?php
			//echo $this->Form->input('item_id',array('class'=>'form-control','div'=>'form-group'));
			//echo $this->Form->input('department_id',array('class'=>'form-control','div'=>'form-group'));
//			echo $this->Form->input('requisition_id',array('class'=>'form-control','div'=>'form-group'));
//			echo $this->Form->input('company_info_id',array('class'=>'form-control','div'=>'form-group'));
//			echo $this->Form->input('quantity',array('class'=>'form-control','div'=>'form-group'));
//			echo $this->Form->input('memo_number',array('class'=>'form-control','div'=>'form-group'));
			//echo $this->Form->submit('Submit',array('class'=>'btn btn-success','label'=>false,'div'=>false));
			//echo $this->Form->input('Cancel',array('type'=>'reset','class'=>'btn btn-warning left-shift-reset','between'=>false,'after'=>false,'label'=>false,'div'=>false));
			?>

		<?php echo $this->Form->end(); ?>
	</div>
</div>
