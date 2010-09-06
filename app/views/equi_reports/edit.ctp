<div class="equiReports form">
<?php echo $this->Form->create('EquiReport');?>
	<fieldset>
 		<legend><?php __('Edit Equi Report'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('titulo');
		echo $this->Form->input('relatório');
		echo $this->Form->input('equipe_id');
		echo $this->Form->input('criado_em');
		echo $this->Form->input('criado_por');
		echo $this->Form->input('alterado_em');
		echo $this->Form->input('alterado_por');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('EquiReport.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('EquiReport.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Equi Reports', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Equipes', true), array('controller' => 'equipes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipe', true), array('controller' => 'equipes', 'action' => 'add')); ?> </li>
	</ul>
</div>