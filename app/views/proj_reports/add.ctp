<div class="projReports form">
<?php echo $this->Form->create('ProjReport');?>
	<fieldset>
 		<legend><?php __('Add Proj Report'); ?></legend>
	<?php
		echo $this->Form->input('projeto_id');
		echo $this->Form->input('proj_rep_status_id');
		echo $this->Form->input('relatório');
		echo $this->Form->input('criado_por');
		echo $this->Form->input('criado_em');
		echo $this->Form->input('alterado_por');
		echo $this->Form->input('alterado_em');
		echo $this->Form->input('titulo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Proj Reports', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Projetos', true), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto', true), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proj Rep Statuses', true), array('controller' => 'proj_rep_statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proj Rep Status', true), array('controller' => 'proj_rep_statuses', 'action' => 'add')); ?> </li>
	</ul>
</div>