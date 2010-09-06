<div class="professores form">
<?php echo $this->Form->create('Professore');?>
	<fieldset>
 		<legend><?php __('Edit Professore'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
		echo $this->Form->input('nome_completo');
		echo $this->Form->input('nascimento');
		echo $this->Form->input('departamento');
		echo $this->Form->input('telefone');
		echo $this->Form->input('sala');
		echo $this->Form->input('unidade');
		echo $this->Form->input('area de atuação');
		echo $this->Form->input('notas');
		echo $this->Form->input('criado_em');
		echo $this->Form->input('criado_por');
		echo $this->Form->input('alterado_em');
		echo $this->Form->input('alterado_por');
		echo $this->Form->input('Projeto');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Professore.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Professore.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Professores', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Prof Emails', true), array('controller' => 'prof_emails', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Prof Email', true), array('controller' => 'prof_emails', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projetos', true), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto', true), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
	</ul>
</div>