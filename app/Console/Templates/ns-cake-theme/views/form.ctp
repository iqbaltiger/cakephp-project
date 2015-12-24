<div class="header bg-light b-b b-light text-right">
	<div class="btn-group">
		<div class="btn btn-sm btn-default btn-icon">
			<i class="icon-large icon-list "></i>
		</div>
		<?php echo "<?php echo \$this->Html->link(__('" . $singularHumanName . " List'), array('action' => 'index'),array('class' => 'btn btn-sm btn-default ajax_page')); ?>\n"; ?>
	</div>
</div>
<!-- Panel -->
<div class="widget">
	<div class="widget-header">
		<i class="icon-bookmark"></i>
		<h3><?php echo "<?php echo __('{$pluralHumanName}'); ?>\n"; ?></h3>
	</div>
	<div class="widget-content">
		<?php echo "<?php echo \$this->Form->create('{$modelClass}',array('role'=>'form','class'=>'')); ?>\n"; ?>
		<?php
		echo "<?php\n";
		foreach ($fields as $field) {
			if (strpos($action, 'add') !== false && $field == $primaryKey) {
				continue;
			} elseif (!in_array($field, array('created', 'modified', 'updated'))) {
				echo "\t\t\techo \$this->Form->input('{$field}',array('class'=>'form-control','div'=>'form-group'));\n";
			}
		}
		if (!empty($associations['hasAndBelongsToMany'])) {
			foreach ($associations['hasAndBelongsToMany'] as $assocName => $assocData) {
				echo "\t\t\techo \$this->Form->input('{$assocName}',array('class'=>'form-control','div'=>'form-group'));\n";
			}
		}
		echo "\t\t\techo \$this->Form->submit('Submit',array('class'=>'btn btn-success','label'=>false,'div'=>false));\n";
		echo "\t\t\techo \$this->Form->input('Cancel',array('type'=>'reset','class'=>'btn btn-warning left-shift-reset','between'=>false,'after'=>false,'label'=>false,'div'=>false));\n";
		echo "\t\t\t?>\n\n";
		?>
		<?php
		echo "<?php echo \$this->Form->end(); ?>\n";
		?>
	</div>
</div>
