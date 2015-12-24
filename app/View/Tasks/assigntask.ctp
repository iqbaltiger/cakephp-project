<div class="header bg-light b-b b-light text-right">
    <div class="btn-group">
        <div class="btn btn-sm btn-default btn-icon">
            <i class="icon-large icon-list "></i>
        </div>
        <?php echo $this->Html->link(__('Task List'), array('action' => 'index'), array('class' => 'btn btn-sm btn-default ajax_page')); ?>
    </div>
</div>
<!-- Panel -->
<div class="widget">
    <div class="widget-header">
        <i class="icon-bookmark"></i>
        <h3><?php echo __('Tasks'); ?>
        </h3>
    </div>
    <div class="widget-content">
        <?php echo $this->Html->script(array('jquery.min', 'bootstrap-datetimepicker')); ?>

        <?php echo $this->Html->css(array('bootstrap-datetimepicker.min')); ?>
        
        <form>
              <fieldset>
                   <div class="row-fluid">
                
                <div class="span4">&nbsp;</div> 
                
                <div class="span4">
                    <h4>Assign Someone:</h4> 
                        
                </div> 
                
                <div class="span4"></div> 
                
                   
            </div>
            <div class="row-fluid">
                
                <div class="span4">&nbsp;</div> 
                
                <div class="span4">
                    <label>User:</label>
                    <select>
                        <option>Select One:</option>
                        <option>Head of IT</option>
                        <option>Project Manager</option>
                        <option>Senior Software Engineer</option>
                        <option>Software Engineer</option>
                        <option>Designer</option>
                    </select>
                    <br/>
                     <a class="btn btn-large btn-primary" type="button" href="/rupayan/tasks/">Assign</a>  
                </div> 
                
                <div class="span4"></div> 
                
                   
            </div>
              
              </fieldset>
        </form>
   </div>
    
  </div>  