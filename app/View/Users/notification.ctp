<div class="widget-content">
    <table class="table table-striped table-bordered  table-hover">
        
        <thead>
            <tr>
                
                <th>Task Name</th> 
                <th>Assigned Date</th> 
                <th>Action</th> 
            </tr>
            
        </thead>
        
        <?php $count=1; foreach ($notification_list as $notification_list): ?>
        <tbody>
            
            <tr>
                
              
                 <?php
                 
                 if(($notification_list['TaskAssign']['notification_status'])==1){
                 
                 echo '<td>'.$this->Html->link($notification_list['Task']['name'],array('action' => 'visitednotification', $notification_list['TaskAssign']['id'])).'</td>'; 
                    }
                    
                 else{
                     
                      echo '<td class="notvisited">'.$this->Html->link($notification_list['Task']['name'],array('action' => 'visitednotification', $notification_list['TaskAssign']['id'])).'</td>'; 
                 
                 }   
                 
                 ?>
               
                <td>
                    
                   <?php echo $notification_list['TaskAssign']['start_date'];?>  
                    
                </td> 
                <td>3</td> 
            </tr>
            
        </tbody>
        <?php endforeach; ?>
        
    </table>
</div>    









