<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
 		<legend><?php __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('criado_em');
		echo $this->Form->input('criado_por');
		echo $this->Form->input('alterado_em');
		echo $this->Form->input('alterado_por');
		echo $this->Form->input('Equipe');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Atividades', true), array('controller' => 'atividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Atividade', true), array('controller' => 'atividades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contatos', true), array('controller' => 'contatos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contato', true), array('controller' => 'contatos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipes', true), array('controller' => 'equipes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipe', true), array('controller' => 'equipes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Membros', true), array('controller' => 'membros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Membro', true), array('controller' => 'membros', 'action' => 'add')); ?> </li>
	</ul>
</div>