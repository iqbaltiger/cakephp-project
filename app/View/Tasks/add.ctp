 
<script type="text/javascript">


       
      
    
            $("#dtp_input1").on("dp.change",function (e) {
                
                alert('input1');
                
             
            });
            $("#dtp_input2").on("dp.change",function (e) {
                
                
                alert('input2');
                
               
            });
 
</script>
<script src="//cdn.ckeditor.com/4.4.6/standard/ckeditor.js"></script>
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


        <ul class="nav nav-tabs" id="createTask">
            <li class="active"><a href="#home">Add Task:</a></li>
            <li><a href="#priority">Priority</a></li>
            <li><a href="#schedule">Schedule:</a></li>
            <li><a href="#settings">Attachment:</a></li>
            <li><a href="#assign">Assign User:</a></li>
        </ul>

        <?php echo $this->Form->create('Task', array('role' => 'form', 'class' => '')); ?>     

        <div class="tab-content">


            <div class="tab-pane active" id="home">


                <div class="row-fluid">

                    <p>
                        <b>Task No: <?php echo $taskNo; ?></b>

                    </p>  
                    <?php echo $this->Form->input('name', array('class' => 'form-control span', 'div' => 'form-group', 'label' => 'Task Name:', 'id' => 'taskName')); ?>

                    <?php
                    echo $this->Form->input('description', array('class' => 'form-control span4 ckeditor', 'div' => 'form-group', 'label' => 'Task Description:', 'type' => 'textarea', 'id' => 'taskDescription',));

                    echo $this->Form->input('task_number', array('class' => 'form-control', 'div' => 'form-group', 'type' => 'hidden', 'value' => $taskNo));
                    ?>

                    <script>
                    CKEDITOR.replace('description');
                    
                    CKEDITOR.config.toolbar = [
   ['Styles','Format','Font','FontSize'],
   '/',
 
   '/',
   ['NumberedList','BulletedList','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
   ['Image','Table','-','Link','Flash','Smiley','TextColor','BGColor','Source']
] ;
                </script>
                    <button id='addTask'class="btn btn-success" type='button'>Next>></button>
                </div>
            </div>
            <div class="tab-pane" id="priority">

                <?php
                echo $this->Form->input('priority', array(
                    'options' => array('Normal', 'High', 'Acute'),
                    'empty' => '(Select One)'
                ));
                ?>

                <button id='schedule_go' class="btn btn-success" type='button'>Next>></button>





            </div>


            <style>
                .form-control.span{width: 700px;}

                #taskDescription{width: 700px;}
                .input-append .add-on, .input-append .btn{margin-top: -9px;}
                .cke_1.cke.cke_reset.cke_chrome.cke_editor_comment_details.cke_ltr.cke_browser_gecko{width:100px;}
            </style>


            <div class="tab-pane" id="schedule">


                <div class="container">


                       <div class="control-group">
                        <label class="control-label">Start Time</label>
                        <div class="controls input-append date form_datetime"  data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                          
                            
                            <?php   echo $this->Form->input('start_date', array('class' => 'form-control span4', 'div' => 'form-group','size'=>16,'type'=>'text','id'=>'dtp_input1','readonly'=>'readonly'));?>
<!--                            <input size="16" type="text" value="" readonly>-->
                            <span class="add-on"><i class="icon-remove"></i></span>
                            <span class="add-on"><i class="icon-th"></i></span>
                        </div>
<!--                        <input type="hidden" id="dtp_input1" value="" /><br/>-->
                    </div> 




                    <div class="control-group">
                        <label class="control-label">End Time</label>
                        <div class="controls input-append date form_datetime"  data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input2">
<!--                            <input size="16" type="text" value="" readonly>-->
                            <?php   echo $this->Form->input('end_date', array('class' => 'form-control span4', 'div' => 'form-group','size'=>16,'type'=>'text','id'=>'dtp_input1','id'=>'dtp_input2','readonly'=>'readonly'));?>
                            <span class="add-on"><i class="icon-remove"></i></span>
                            <span class="add-on"><i class="icon-th"></i></span>
                        </div>
<!--                        <input type="hidden" id="dtp_input2" value="" /><br/>-->
                    </div> 


                    <button id='setting_go' class="btn btn-success" type='button'>Next>></button>

                </div>


            </div>
            <div class="tab-pane" id="settings">

                <div class="container">

                   <?php   echo $this->Form->input('attachment', array('class' => 'form-control span4', 'div' => 'form-group', 'label' => 'Attachment:', 'type' => 'file',)); ?>
                    <button id='assign_go' class="btn btn-success" type='button'>Next>></button>
                </div>


                
            </div>
            
            
             <div class="tab-pane" id="assign">
                <div class="container"> 
                <h4>Assign Task:</h4>
                
                <?php
                
//                 foreach($alluser as $user):
//                     
//                     echo $user['User']['name'];
//                     
//                     
//                 endforeach;
                
                
             //   echo $this->Form->input('name',array('class'=>'form-control span4','div'=>'form-group','label'=>'Name:','value'=>$alluser));
                
                
                ?>
                
                  <?php echo $this->Form->input('TaskAssign.user_id',array('class'=>'form-control','div'=>'form-group','options'=>$alluser,'type'=>'select','empty'=>'select one','label'=>false));?>
                
                <?php echo $this->Form->submit('Submit', array('class' => 'btn btn-success', 'label' => false, 'div'=> false)); ?>
                
                </div>
            </div>
            
            
           
            
            
            


            <?php echo $this->Form->end(); ?>      

            <script>

      
               

                $('#createTask a').click(function(e) {
        //    e.preventDefault();
        //    $(this).tab('show');

                    $('#createTask li:eq(0) a').tab('show');
                })

                $('#addTask').click(function() {


                   var messageLength = CKEDITOR.instances['taskDescription'].getData().replace(/<[^>]*>/gi, '').length;
       
       
                  
                  
                  
                  

                    var taskName = $('#taskName').val();
                   // var taskDescription = $('#taskDescription').val();
                    
                    
                 
                   

                    if ((taskName.length >0)&&(messageLength>0)) {

                        $('#createTask li:eq(1) a').tab('show');
                    }



                })



           
            // find the input fields and apply the time select to them.
         //   $('#sample1 input').ptTimeSelect();
        


                $('#schedule_go').click(function() {
                    $('#createTask li:eq(2) a').tab('show');
                    
                    
                     $('#createTask li:eq(1) a').click(function(){$('#createTask li:eq(1) a').tab('show')});
                   
                    $('.form_datetime').datetimepicker();

                })

                $('#setting_go').click(function() {
                    $('#createTask li:eq(3) a').tab('show');

                     $('#createTask li:eq(2) a').click(function(){$('#createTask li:eq(2) a').tab('show')});
                })


                $('#assign_go').click(function() {
                    $('#createTask li:eq(4) a').tab('show');
                
    
                })


            </script>





        </div>
    </div>
