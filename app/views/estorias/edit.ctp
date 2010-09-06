<div class="estorias form">
<?php echo $this->Form->create('Estoria');?>
	<fieldset>
 		<legend><?php __('Edit Estoria'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('estoria');
		echo $this->Form->input('sprint_id');
		echo $this->Form->input('descrição');
		echo $this->Form->input('notas');
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

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Estoria.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Estoria.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Estorias', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Sprints', true), array('controller' => 'sprints', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sprint', true), array('controller' => 'sprints', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Atividades', true), array('controller' => 'atividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Atividade', true), array('controller' => 'atividades', 'action' => 'add')); ?> </li>
	</ul>
</div>