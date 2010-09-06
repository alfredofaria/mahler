<div class="projetos form">
<?php echo $this->Form->create('Projeto');?>
	<fieldset>
 		<legend><?php __('Edit Projeto'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('projeto');
		echo $this->Form->input('proj_tipo_id');
		echo $this->Form->input('equipe_id');
		echo $this->Form->input('contato_id');
		echo $this->Form->input('inicio');
		echo $this->Form->input('termino');
		echo $this->Form->input('descricao');
		echo $this->Form->input('escopo');
		echo $this->Form->input('justificativa');
		echo $this->Form->input('notas');
		echo $this->Form->input('criado_em');
		echo $this->Form->input('criado_por');
		echo $this->Form->input('alterado_em');
		echo $this->Form->input('alterado_por');
		echo $this->Form->input('Contato');
		echo $this->Form->input('Professore');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Projeto.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Projeto.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Projetos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Proj Tipos', true), array('controller' => 'proj_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proj Tipo', true), array('controller' => 'proj_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipes', true), array('controller' => 'equipes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipe', true), array('controller' => 'equipes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contatos', true), array('controller' => 'contatos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contato', true), array('controller' => 'contatos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Etapas', true), array('controller' => 'etapas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Etapa', true), array('controller' => 'etapas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Noticias', true), array('controller' => 'noticias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Noticia', true), array('controller' => 'noticias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proj Reports', true), array('controller' => 'proj_reports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proj Report', true), array('controller' => 'proj_reports', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sprints', true), array('controller' => 'sprints', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sprint', true), array('controller' => 'sprints', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Professores', true), array('controller' => 'professores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Professore', true), array('controller' => 'professores', 'action' => 'add')); ?> </li>
	</ul>
</div>