<div class="profEmails form">
<?php echo $this->Form->create('ProfEmail');?>
	<fieldset>
 		<legend><?php __('Edit Prof Email'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('professore_id');
		echo $this->Form->input('email');
		echo $this->Form->input('primario');
		echo $this->Form->input('opted_out');
		echo $this->Form->input('invalido');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('ProfEmail.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('ProfEmail.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Prof Emails', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Professores', true), array('controller' => 'professores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Professore', true), array('controller' => 'professores', 'action' => 'add')); ?> </li>
	</ul>
</div>