<div class="projTipos form">
<?php echo $this->Form->create('ProjTipo');?>
	<fieldset>
 		<legend><?php __('Edit Proj Tipo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tipo');
		echo $this->Form->input('descrição');
		echo $this->Form->input('ativo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('ProjTipo.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('ProjTipo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Proj Tipos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Projetos', true), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto', true), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
	</ul>
</div>