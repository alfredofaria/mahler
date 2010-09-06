<div class="noticias form">
<?php echo $this->Form->create('Noticia');?>
	<fieldset>
 		<legend><?php __('Add Noticia'); ?></legend>
	<?php
		echo $this->Form->input('projeto_id');
		echo $this->Form->input('titulo');
		echo $this->Form->input('noticia');
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

		<li><?php echo $this->Html->link(__('List Noticias', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Projetos', true), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto', true), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
	</ul>
</div>