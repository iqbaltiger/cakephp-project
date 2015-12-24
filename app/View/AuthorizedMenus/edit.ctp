<div class="header bg-light b-b b-light text-right">
	<div class="btn-group">
		<div class="btn btn-sm btn-default btn-icon">
			<i class="icon-large icon-list "></i>
		</div>
		<?php echo $this->Html->link(__('Authorized Menu List'), array('action' => 'index'),array('class' => 'btn btn-sm btn-default ajax_page')); ?>
	</div>
</div>
<!-- Panel -->
<div class="widget">
	<div class="widget-header">
		<i class="icon-bookmark"></i>
		<h3><?php echo __('Authorized Menus'); ?>
</h3>
	</div>
	<div class="widget-content">
		<?php echo $this->Form->create('AuthorizedMenu',array('role'=>'form','class'=>'')); ?>
		<div class="row">
			<div class="span5 offset1">
				<?php
					
					echo $this->Form->input('id');
					echo $this->Form->input('name');
					echo $this->Form->input('parent_id',array('type'=>'select','options'=>$parentAuthorizedMenus,'empty'=>'Select One'));
					echo $this->Form->input('dominion_id');
					echo $this->Form->input('process_id');
					echo $this->Form->input('icon');
					echo $this->Form->input('status',array('type'=>'select','options'=>$status,'empty'=>'Select One'));
					echo $this->Form->input('position');
					echo $this->Form->submit('Submit',array('class'=>'btn btn-success','label'=>false,'div'=>false));
					echo $this->Form->input('Cancel',array('type'=>'reset','class'=>'btn btn-warning left-shift-reset','label'=>false,'div'=>false));
				?>
			</div>
			<div class="span5">
				<h3>Select Role</h3>
				<div class="form-group">
					<div class="controls">
						
						<?php $i= 0 ; foreach($roles as $role_id=>$role): ?>
							<label class="checkbox">
								<?php 
									$checked = '';
									if($this->Custom->authorizeMenuIsCheckedRole($role_id,$this->data['AuthorizedMenu']['role_id'])){
										echo $this->Form->input('AuthorizedMenu.role_id.'.$i,array('type'=>'checkbox','class'=>'form-control','checked'=>'checked','value'=>$role_id,'div'=>false,'label'=>false)); 
									}else{
										echo $this->Form->input('AuthorizedMenu.role_id.'.$i,array('type'=>'checkbox','class'=>'form-control','value'=>$role_id,'div'=>false,'label'=>false));
									} 
								?>
								<?php echo '<span>'.$role.'</span>'; ?>
							</label>
						<?php $i++; endforeach; ?>
						
					</div>
				</div>
			</div>
		</div>
		<?php echo $this->Form->end(); ?>
	</div>
</div>
