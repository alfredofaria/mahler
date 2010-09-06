<div class="etapas form">
<?php echo $this->Form->create('Etapa');?>
	<fieldset>
 		<legend><?php __('Add Etapa'); ?></legend>
	<?php
		echo $this->Form->input('projeto_id');
		echo $this->Form->input('etapa');
		echo $this->Form->input('planejado');
		echo $this->Form->input('finalizado');
		echo $this->Form->input('descrição');
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

		<li><?php echo $this->Html->link(__('List Etapas', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Projetos', true), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto', true), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
	</ul>
</div>