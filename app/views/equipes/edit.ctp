<div class="equipes form">
<?php echo $this->Form->create('Equipe');?>
	<fieldset>
 		<legend><?php __('Edit Equipe'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('equipe');
		echo $this->Form->input('descrição');
		echo $this->Form->input('notas');
		echo $this->Form->input('ativo');
		echo $this->Form->input('ativada_em');
		echo $this->Form->input('desativada_em');
		echo $this->Form->input('user_id');
		echo $this->Form->input('criado_em');
		echo $this->Form->input('criado_por');
		echo $this->Form->input('alterado_em');
		echo $this->Form->input('alterado_por');
		echo $this->Form->input('User');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Equipe.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Equipe.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Equipes', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Equi Reports', true), array('controller' => 'equi_reports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equi Report', true), array('controller' => 'equi_reports', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projetos', true), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto', true), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sprints', true), array('controller' => 'sprints', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sprint', true), array('controller' => 'sprints', 'action' => 'add')); ?> </li>
	</ul>
</div>