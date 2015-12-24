<div class="subnavbar">
	<div class="subnavbar-inner">
		<div class="container">
			<ul class="mainnav">
				<?php
					//pr($admin_menu_data);
				?>
				<?php 
					foreach($admin_menu_data as $menu_data): 
						$controller = '';
						$action = '';
						$dropdown = '';
						
						if(!empty($menu_data['Dominion'])){
							$controller = strtolower(str_replace('_', '', $menu_data['Dominion']['name']));
						}
						
						if(!empty($menu_data['Process'])){
							$action = strtolower(str_replace('_', '', $menu_data['Process']['name']));
						}
						
						if(!empty($menu_data['children'])){
							$dropdown = 'dropdown';
						}
						
				?>
					<?php if($this->Custom->authorizeMenuIsCheckedRole($role_id,$menu_data['AuthorizedMenu']['role_id'])): ?>
					<li class="<?php echo $dropdown; ?>">
						<?php 
							if($dropdown=='dropdown'){
								echo '<a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;">'.$menu_data['AuthorizedMenu']['icon'].' <span>'.$menu_data['AuthorizedMenu']['name'].'</span></a>';
							}else{
								echo $this->Html->link($menu_data['AuthorizedMenu']['icon'].' <span>'.$menu_data['AuthorizedMenu']['name'].'</span>',array('controller'=>$controller,'action'=>$action),array('escape'=>false));
							}
						?>
						<?php  ?>
						
						<?php if(!empty($menu_data['children'])): ?>
							<ul class="dropdown-menu">
								<?php foreach($menu_data['children'] as $dropdown_menu): ?>
									<?php $controller = strtolower(str_replace('_', '', $dropdown_menu['Dominion']['name'])); ?>
									<?php $action = strtolower(str_replace('_', '', $dropdown_menu['Process']['name'])); ?>
									<li>
										<?php echo $this->Html->link($dropdown_menu['AuthorizedMenu']['icon'].' <span>'.$dropdown_menu['AuthorizedMenu']['name'].'</span>',array('controller'=>$controller,'action'=>$action),array('escape'=>false)); ?>
									</li>
								<?php endforeach; ?>
							</ul>
						<?php endif; ?>
					</li>
					<?php endif; ?>
					
				<?php endforeach; ?> 
                                        
                                       <li class="">
                                           <a href="/rupayan/stocks"><i style="color:#00BA8B;" class="icon-large icon-archive"></i> <span style="color:#00BA8B;">Inventory</span></a>												
											</li>  
                                                                                        
                                       <li class="">
                                           <a href="/rupayan/requisitions"><i style="color:#3B5574;" class="icon-large icon-search"></i> <span style="color:#3B5574;">Requisition</span></a>												
											</li>
                                                                                        
                                         <li class="">
                                             <a href="/rupayan/tasks"><i style="color:#6FC850;" class="icon-large icon-asterisk"></i> <span style="color:#6FC850;">KPI</span></a>												
											</li>
                                                                                        
                                        <li class="">
						<a href="/rupayan/tasks"><i style="color:rgb(143,0,21);" class="icon-large icon-bar-chart"></i> <span style="color:rgb(143,0,21);">All Reports</span></a>												
											</li>
                                         <li class="">
						<a href="/rupayan/tasks"><i style="color:green;" class="icon-large icon-exclamation-sign"></i> <span style="color:green;"><b>Help</b></span></a>												
											</li>                                                
                                                                                        
                                                                                        
			</ul>
		</div>
		<!-- /container -->
	</div>
	<!-- /subnavbar-inner -->
</div>