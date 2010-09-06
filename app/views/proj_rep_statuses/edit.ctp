<div class="projRepStatuses form">
<?php echo $this->Form->create('ProjRepStatus');?>
	<fieldset>
 		<legend><?php __('Edit Proj Rep Status'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('status');
		echo $this->Form->input('descrição');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('ProjRepStatus.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('ProjRepStatus.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Proj Rep Statuses', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Proj Reports', true), array('controller' => 'proj_reports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proj Report', true), array('controller' => 'proj_reports', 'action' => 'add')); ?> </li>
	</ul>
</div>