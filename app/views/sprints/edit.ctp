<div class="sprints form">
<?php echo $this->Form->create('Sprint');?>
	<fieldset>
 		<legend><?php __('Edit Sprint'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('sprint');
		echo $this->Form->input('inicio');
		echo $this->Form->input('termino');
		echo $this->Form->input('equipe_id');
		echo $this->Form->input('projeto_id');
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

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Sprint.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Sprint.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Sprints', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Equipes', true), array('controller' => 'equipes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipe', true), array('controller' => 'equipes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projetos', true), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto', true), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estorias', true), array('controller' => 'estorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estoria', true), array('controller' => 'estorias', 'action' => 'add')); ?> </li>
	</ul>
</div>