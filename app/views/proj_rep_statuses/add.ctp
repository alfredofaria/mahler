<div class="projRepStatuses form">
<?php echo $this->Form->create('ProjRepStatus');?>
	<fieldset>
 		<legend><?php __('Add Proj Rep Status'); ?></legend>
	<?php
		echo $this->Form->input('status');
		echo $this->Form->input('descrição');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Proj Rep Statuses', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Proj Reports', true), array('controller' => 'proj_reports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proj Report', true), array('controller' => 'proj_reports', 'action' => 'add')); ?> </li>
	</ul>
</div>