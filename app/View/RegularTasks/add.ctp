<div class="header bg-light b-b b-light text-right">
    <div class="btn-group">
        <div class="btn btn-sm btn-default btn-icon">
            <i class="icon-large icon-list "></i>
        </div>
        <?php echo $this->Html->link(__('Regular Task List'), array('action' => 'regulartasklist'), array('class' => 'btn btn-sm btn-default ajax_page')); ?>
    </div>
</div>
<!-- Panel -->
<div class="widget">
    <div class="widget-header">
        <i class="icon-bookmark"></i>
        <h3><?php echo __('Tasks/Regular Task'); ?>
        </h3>
    </div>
    <div class="widget-content">
        <?php echo $this->Html->script(array('jquery.min', 'bootstrap-datetimepicker')); ?>

        <?php echo $this->Html->css(array('bootstrap-datetimepicker.min')); ?>

        <?php echo $this->Form->create('RegularTask',array('role'=>'form','class'=>'')); ?>
            <fieldset>
                <div class="row-fluid">

                    <div class="span4">&nbsp;</div> 

                    <div class="span4">
                        <h4>Assign Regular Task For The Designation:</h4> 
                        <p>&nbsp;</p>
                    </div> 

                    <div class="span4"></div> 


                </div>
                <div class="row-fluid">
                     
                    
                     <div class="span2">&nbsp;</div>
                    <div class="span2"><label>Select Designation:</label></div> 

                    <div class="span4">
                        <?php echo $this->Form->input('role_id',array('class'=>'form-control','div'=>'form-group','label'=>false,'empty'=>'Please Select the Role')); ?>
<!--                        <select>
                            <option>Select One:</option>
                            <option>Chairman</option>
                            <option>MD & CEO</option>
                            <option>Head of IT</option>
                            <option>Project Manager</option>
                            <option>Senior Software Engineer</option>
                            <option>Software Engineer</option>
                            <option>Designer</option>
                        </select>-->
                        <br/>

                       
                    </div> 

                    


                </div>
                
                <script>
                
               $(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $("#recreatedPlace"); //Fields wrapper
   
   
 
   
    var x = 1; //initlal text box count
    $('#addMore').click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div><div class="span4">&nbsp;</div><input type="text" name="data[RegularTask][task_name][]" class="span6" style="margin-left:-12px;"><a href="#" style="margin-left:25px;"class="remove_field icon-large icon-minus-sign btn btn-danger btn-sm btn-primary"></a></div>'); 
        }
    });
   
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
                </script>
                
                <div class='row-fluid'>
                    
                    <div class="span2">&nbsp;</div>
                     <div class="span2">
                                <label>Regular Task Name:</label>
                            </div>

                    <div id='recreate' class=''>
                    
                        <div class='span6'>
                            
                            <?php echo $this->Form->input('task_name.',array('class'=>'form-control','div'=>'form-group','type'=>'text','class'=>'span6','label'=>false));?>
                            
                            <?php
                            
                              echo $this->Form->input('status',array('class'=>'form-control','div'=>'form-group','type'=>'hidden'));
                            
                            ?>
                        </div>
                            
                            <div class="span1">
                                
                                <a class="icon-large icon-plus btn btn-sm btn-primary" id='addMore' type="button"></a>  
			
		            </div>
                            
                            
                        </div>    
                    
                    <div id='recreatedPlace'></div>
                    
                    <div class='row-fluid'>
                    
                    <div class='span4'>&nbsp;</div>
                    
                    <div class='span4'>
                        
                         <input type="submit" class="btn btn-inverse" value="Save" align="center">
                    </div>
                    
                    </div>
                    
                </div>

            </fieldset>
       <?php echo $this->Form->end(); ?>
    </div>

</div>  