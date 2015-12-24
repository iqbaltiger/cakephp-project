<?php echo $this->Html->script('bootstrap-filestyle.min'); ?>

<script>

  $(":file").filestyle();

</script>

<!-- Actions -->

<div class="widget">
    <div class="widget-header">
        <i class="icon-bookmark"></i>
        <h3><?php echo __('Tasks'); ?>
        </h3>
    </div>
    <div class="widget-content">
        
        
         <div class="row-fluid"> <!--Task Name:--->

            <div class='span4'>&nbsp;</div>

            <div class='span6'>&nbsp;</div>

            <div class='span2'>
                
                <div class="btn-group">
        <div class="btn btn-sm btn-dark btn-icon">
            
            <i class="icon-large icon-user"></i>
        </div>
        <a class="btn btn-sm btn-primary" href="/rupayan/tasks/assigntask">Reassign</a> 
    </div>
            </div>
             
        </div> <!----End Of Task Name:--->
        
       

        <div class="row-fluid"> <!--Task Name:--->

            <div class='span4'>

                <h4><b>Task Name:</b> <?php echo $task_detail[0]['Task']['name']; ?>.</h4>

            </div>

        </div> <!----End Of Task Name:--->

        <div class="row-fluid"> <!--Task Details:--->

            <div class="span6">

                <b>Opened By: </b><?php echo $task_detail[0]['User']['username']; ?>
            </div>

            <div class="span3">

                <b>Status:</b>
            </div>


            <div class="span3">

                <b>Created:</b><?php echo $task_detail[0]['Task']['start_date']; ?>
            </div>

            <div class="span4">


            </div>

        </div> <!----End Of Task Details:--->



        <div class='row-fluid'> <!--Task Details Parra-->
            <div class="span12">
                <p>&nbsp;</p>
                <p>
                    <?php echo $task_detail[0]['Task']['description']; ?>
                </p>

            </div>


        </div><!--Task Details Parra-->

        <style>
            .row-border{

                border:1px solid #ccc;
            }




            .span8:hover{

                background-color: #f5f5f5;

            }

            .span8 div{


                

            }
            .border-right{

                border-right:0px solid #ccc;
                min-height:250px;

            }

            .border-left{

                border-right:0px solid #ccc;
                min-height:250px;

            }
            
            .border-right p{margin-left: 20px;}


            .span8 p{margin-top: 5px;}

            textarea{width:700px;margin-top: 10px;}
            
          
        </style>







        <div class='row-fluid row-border'>

            <div class="span3 border-right">
                <p><b> Posted On: </b>30-12-2014 1:14pm</p>
                <?php echo $this->Html->image('no_image.jpg', array('alt' => 'Cake')); ?>
            </div>
            <div class="span8">

                <p>
                    This is reply details. This is reply details.This is reply details.This is reply details.This is reply details.This is reply details.This is reply details.This is reply details.This is reply details. 
                    This is reply details. This is reply details.This is reply details.This is reply details.This is reply details.This is reply details.This is reply details.This is reply details.This is reply details. 
                    This is reply details. This is reply details.This is reply details.This is reply details.This is reply details.This is reply details.This is reply details.This is reply details.This is reply details. 
                </p>

                
                 
                
                
            </div>
        </div>






        <div class='row-fluid row-border'>

            <div class="span3 border-right">
                <p><b> Posted On: </b>01-1-2015 2:18pm</p>
                <?php echo $this->Html->image('no_image.jpg', array('alt' => 'Cake')); ?>
            </div>
            <div class="span8">

                <p>
                    This is reply details. This is reply details.This is reply details.This is reply details.This is reply details.This is reply details.This is reply details.This is reply details.This is reply details. 
                    This is reply details. This is reply details.This is reply details.This is reply details.This is reply details.This is reply details.This is reply details.This is reply details.This is reply details. 
                    This is reply details. This is reply details.This is reply details.This is reply details.This is reply details.This is reply details.This is reply details.This is reply details.This is reply details. 
                
                    <span><a  id="clickReply">Reply</span>
                    
                <p id="fillIt"></p>
                </p>
                
                <div class="span8 span" id="collapse"> 
                <script src="//cdn.ckeditor.com/4.4.6/standard/ckeditor.js"></script>
                <textarea name="comment_details" rows="5" cols="100"></textarea>
                <script>
                    CKEDITOR.replace('comment_details');
                    
                  CKEDITOR.config.toolbar = [
   ['Styles','Format','Font','FontSize'],
   '/',
 
   '/',
   ['NumberedList','BulletedList','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
   ['Image','Table','-','Link','Flash','Smiley','TextColor','BGColor','Source']
] ;

             CKEDITOR.config.width = 700;

                </script>
                
               
                
                
                
                
                <p>&nbsp;</p>
                <div class="span12">
                    
                    <div class="span1">
                        <label><b>Attachment:</b> </label>
                    </div>
                    <div class="span4"><input type="file" class="filestyle" data-input="false"></div>
                    
                    <div class="span4"></div>
                    
                </div>  
                 
                 <p>&nbsp;</p>
                 <div class="span12">
                     
                     <div class="span4"> <p style="text-align: center;"> <input type="submit" class="btn btn-inverse" value="send" align="center"></p></div>
                     
                    </div>
                
            </div>
                

            </div>
        </div>


        <script type="text/javascript">
        
           $(document).ready(function(){
               
                $("#collapse").hide();
              $('#clickReply').click(function(){
                  
                  var collapse = $('#collapse').html();
                  
               
                  $("#collapse").toggle();
                  
              })
              
               
           });
        
        </script>
        

        <div class='row-fluid row-border'>

            <div class="span3 border-right">
                <p> Add Comments:</p>
            </div>
            <div class="span8 span">
                <script src="//cdn.ckeditor.com/4.4.6/standard/ckeditor.js"></script>
                <textarea name="comment_details_last" rows="5" cols="100"></textarea>
                <script>
                    CKEDITOR.replace('comment_details_last');
                    
                  CKEDITOR.config.toolbar = [
   ['Styles','Format','Font','FontSize'],
   '/',
 
   '/',
   ['NumberedList','BulletedList','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
   ['Image','Table','-','Link','Flash','Smiley','TextColor','BGColor','Source']
] ;

             CKEDITOR.config.width = 700;

                </script>
                 <p>&nbsp;</p>
                <div class="span12">
                    
                    <div class="span1">
                        <label><b>Attachment:</b> </label>
                    </div>
                    <div class="span4"><input type="file" class="filestyle" data-input="false"></div>
                    
                    <div class="span4"></div>
                    
                </div>  
                 
                 <p>&nbsp;</p>
                 <div class="span12">
                     
                     <div class="span4"> <p style="text-align: center;"> <input type="submit" class="btn btn-inverse" value="send" align="center"></p></div>
                     
                    </div>
               
              
            </div>
        </div>




    </div>
</div>