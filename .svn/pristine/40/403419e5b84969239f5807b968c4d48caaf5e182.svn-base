<!-- Actions -->
<div class="header bg-light b-b b-light text-right">
	<div class="btn-group">
		<div class="btn btn-default btn-icon">
			<i class="icon-large icon-list "></i>
		</div>
		<?php echo "<?php echo \$this->Html->link(__('" . $singularHumanName . " List'), array('action' => 'index'),array('class' => 'btn btn-default')); ?>\n"; ?>
	</div>
	
	<div class="btn-group">
		<div class="btn">
			<i class="icon-large icon-plus "></i>
		</div>
		<?php echo "<?php echo \$this->Html->link(__('Add New " . $singularHumanName . "'), array('action' => 'add'),array('class' => 'btn btn-primary')); ?>\n"; ?>
	</div>
</div>
<!-- Panel -->
<div class="widget">
	<div class="widget-header">
		<i class="icon-bookmark"></i>
		<h3><?php echo "<?php echo __('{$pluralHumanName}'); ?>\n"; ?></h3>
	</div>
	<div class="widget-content">
		<table class="table table-striped table-bordered  table-hover">
			<thead>
				<tr>
					<?php foreach ($fields as $field): ?>
						<?php echo "<th><?php echo \$this->Paginator->sort('{$field}', null, array('class'=>'')); ?></th>\n"; ?>
					<?php endforeach;?>
					<th><i class="icon-large icon-cog "></i></th>
				</tr>
			</thead>
			<tbody>
				<?php
				echo "<?php foreach (\${$pluralVar} as \${$singularVar}): ?>\n";
				echo "\t\t\t\t\t<tr>\n";
					foreach ($fields as $field) {
						$isKey = false;
						if (!empty($associations['belongsTo'])) {
							foreach ($associations['belongsTo'] as $alias => $details) {
								if ($field === $details['foreignKey']) {
									$isKey = true;
									echo "\t\t\t\t\t\t<td>\n\t\t\t\t\t\t\t<?php echo \$this->Html->link(\${$singularVar}['{$alias}']['{$details['displayField']}'], array('controller' => '{$details['controller']}', 'action' => 'view', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?>\n\t\t\t\t\t\t</td>\n";
									break;
								}
							}
						}
						if ($isKey !== true) {
							echo "\t\t\t\t\t\t<td><?php echo h(\${$singularVar}['{$modelClass}']['{$field}']); ?>&nbsp;</td>\n";
						}
					}
			
				echo "\t\t\t\t\t\t<td>\n";
				echo "\t\t\t\t\t\t\t<?php echo \$this->Html->link('<i class=\"icon-large icon-eye-open\"></i>', array('action' => 'view', \${$singularVar}['{$modelClass}']['{$primaryKey}']),array('class'=>'btn btn-rounded btn-small btn-icon btn-primary', 'escape'=>false)); ?>\n";
				echo "\t\t\t\t\t\t\t<?php echo \$this->Html->link('<i class=\"icon-large icon-edit\"></i> ', array('action' => 'edit', \${$singularVar}['{$modelClass}']['{$primaryKey}']),array('class'=>'btn btn-rounded btn-small btn-icon btn-info','escape'=>false)); ?>\n";
				echo "\t\t\t\t\t\t\t<?php echo \$this->Form->postLink('<i class=\"icon-large icon-trash\"></i>', array('action' => 'delete', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('class'=>'btn btn-rounded btn-small btn-icon btn-danger', 'escape'=>false), __('Are you sure?')); ?>\n";
				echo "\t\t\t\t\t\t</td>\n";
				echo "\t\t\t\t\t</tr>\n";
				echo "\t\t\t\t\t<?php endforeach; ?>\n";
				?>
			</tbody>
		</table>
	</div>
	<div class="widget-footer">
		<?php echo "<?php if(\$this->Paginator->counter('{:pages}') > 1) : ?>\n"; ?>
		<div class="panel-footer">
			<div class="row">
				<span class="col-md-5"> 
					<?php echo "<?php echo \$this->Paginator->counter('page {:page} of pages {:pages}');?>\n";?>
				</span>
				<span class="col-md-7 text-right">
					<ul class="pagination pagination-sm ">
					<?php echo "<?php\n";
						echo "\t\t\t\t\techo \$this->Paginator->prev('&laquo;', array('tag'=>'li','escape'=>false,'class' => 'ajax_page'), null, array('class' => 'disabled','tag'=>'li','disabledTag'=>'a','escape'=>false));\n";
						echo "\t\t\t\t\techo \$this->Paginator->numbers(array('separator' => '','tag'=>'li','currentTag'=>'a','currentClass'=>'active','class' => 'ajax_page'));\n";
						echo "\t\t\t\t\techo \$this->Paginator->next('&raquo;', array('tag'=>'li','escape'=>false,'class' => 'ajax_page'), null, array('class' => 'disabled','tag'=>'li','escape'=>false,'disabledTag'=>'a'));\n";
						echo "\t\t\t\t?>\n";
					?>
					</ul>
				</span>
			</div>
		</div>
		<?php echo "<?php endif; ?>\n"; ?>
	</div>
</div>
