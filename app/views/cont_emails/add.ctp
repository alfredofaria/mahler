<div class="contEmails form">
<?php echo $this->Form->create('ContEmail');?>
	<fieldset>
 		<legend><?php __('Add Cont Email'); ?></legend>
	<?php
		echo $this->Form->input('contatos_id');
		echo $this->Form->input('email');
		echo $this->Form->input('primario');
		echo $this->Form->input('opded_out');
		echo $this->Form->input('invalido');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Cont Emails', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Contatos', true), array('controller' => 'contatos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contatos', true), array('controller' => 'contatos', 'action' => 'add')); ?> </li>
	</ul>
</div>