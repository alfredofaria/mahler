<div class="atvStatuses form">
<?php echo $this->Form->create('AtvStatus');?>
	<fieldset>
 		<legend><?php __('Add Atv Status'); ?></legend>
	<?php
		echo $this->Form->input('status');
		echo $this->Form->input('descricao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Atv Statuses', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Atividades', true), array('controller' => 'atividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Atividade', true), array('controller' => 'atividades', 'action' => 'add')); ?> </li>
	</ul>
</div>