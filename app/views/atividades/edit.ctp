<div class="atividades form">
<?php echo $this->Form->create('Atividade');?>
	<fieldset>
 		<legend><?php __('Edit Atividade'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('atividade');
		echo $this->Form->input('inicio_planejado');
		echo $this->Form->input('termino_planejado');
		echo $this->Form->input('termino_real');
		echo $this->Form->input('atv_status_id');
		echo $this->Form->input('estimativa');
		echo $this->Form->input('estoria_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('descrição');
		echo $this->Form->input('notas');
		echo $this->Form->input('criado_por');
		echo $this->Form->input('criado_em');
		echo $this->Form->input('alterado_por');
		echo $this->Form->input('alterado_em');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Atividade.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Atividade.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Atividades', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Atv Statuses', true), array('controller' => 'atv_statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Atv Status', true), array('controller' => 'atv_statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estorias', true), array('controller' => 'estorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estoria', true), array('controller' => 'estorias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>