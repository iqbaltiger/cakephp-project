
<?php
   echo $this->Html->script('jquery-1.7.2.min.js');

?>

<script>
    

    
    $(document).ready(function(){
        
        function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

 $("#uploadImage").change(function(){
    readURL(this);
});
       
        
        
    });
    
</script>    

<div class="header bg-light b-b b-light text-right">
	<div class="btn-group">
		<div class="btn btn-sm btn-default btn-icon">
			<i class="icon-large icon-list "></i>
		</div>
		<?php echo $this->Html->link(__('User List'), array('action' => 'index'),array('class' => 'btn btn-sm btn-default ajax_page')); ?>
	</div>
</div>
<!-- Panel -->
<div class="widget">
	<div class="widget-header">
		<i class="icon-bookmark"></i>
		<h3><?php echo __('Users/Employee Add'); ?>
</h3>
	</div>
    
    
   
    
    <?php echo $this->Form->create('User',array('role'=>'form','class'=>'','enctype'=>'multipart/form-data')); ?>
    
    
    
  
	<div class="widget-content">
 <div class="row-fluid">
     <div class="span4">
         <?php
         
            echo $this->Html->image('no_image.jpg', array('alt' => 'Cake','id'=>'blah','width'=>200,'height'=>200));
         ?>
         <p>&nbsp;</p>
         <?php    echo $this->Form->input('Profile.image',array('type'=>'file','id'=>'uploadImage','label'=>false));?>
         
     </div>
  <div class="span4"><?php
                           
                        echo $this->Form->input('Profile.first_name',array('class'=>'form-control','div'=>'form-group'));
                       
                        echo $this->Form->input('Profile.work_station',array('class'=>'form-control','div'=>'form-group','type'=>'textarea'));
                        
                          echo $this->Form->input('Profile.designation_id',array('type'=>'select','class'=>'form-control','div'=>'form-group','empty'=>'select one'));
                        echo $this->Form->input('User.role_id',array('class'=>'form-control','div'=>'form-group'));    
                          ?>
      
      
      <div class="row-fluid">
          
          <div class="span8"><?php echo $this->Form->input('Profile.phone_number',array('class'=>'form-control','div'=>'form-group')); ?></div>
          
          <div class="span4"><?php echo $this->Form->input('Profile.ext_number',array('class'=>'form-control span1','div'=>'form-group','size'=>10)); ?></div>
      </div>
      
      
      
  
  </div>
  <div class="span4">
      
      <?php
      
        echo $this->Form->input('Profile.last_name',array('class'=>'form-control','div'=>'form-group'));
         
        echo $this->Form->input('Profile.mobile_number',array('class'=>'form-control','div'=>'form-group'));
          
        echo $this->Form->input('User.username',array('class'=>'form-control','div'=>'form-group'));
	echo $this->Form->input('User.email',array('class'=>'form-control','div'=>'form-group'));
	echo $this->Form->input('User.password',array('class'=>'form-control','div'=>'form-group'));
        echo $this->Form->input('Profile.departments_id',array('class'=>'form-control','div'=>'form-group'));
       // echo $this->Form->input('User.status',array('class'=>'form-control','div'=>'form-group','type'=>'select','options'=>$selectActOrInactive));
      ?>
      
     
      
  </div>
  
</div>
            <p>&nbsp;</p>     
      <div class="row-fluid">
          <div class="span4">&nbsp;</div>
          <div class="span4">
              
               <?php
         
         
            echo $this->Form->submit('Submit',array('class'=>'btn btn-success','label'=>false,'div'=>false));?>
              
              <span style="margin-left: 10px;">   <?php
	    echo $this->Form->input('Cancel',array('type'=>'reset','class'=>'btn btn-warning left-shift-reset','label'=>false,'div'=>false));
            
              ?> 
           </span>
          
       </div>   
            
       
         <?php echo $this->Form->end(); ?>
            
            
            
            
            
           
            
            
            
            
         </div> <!--Extra Div Will remove Here-->
            
            
		
		

		
	</div>
</div>
