<div class="profEmails view">
<h2><?php  __('Prof Email');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $profEmail['ProfEmail']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Professore'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($profEmail['Professore']['nome'], array('controller' => 'professores', 'action' => 'view', $profEmail['Professore']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $profEmail['ProfEmail']['email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Primario'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $profEmail['ProfEmail']['primario']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Opted Out'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $profEmail['ProfEmail']['opted_out']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Invalido'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $profEmail['ProfEmail']['invalido']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Prof Email', true), array('action' => 'edit', $profEmail['ProfEmail']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Prof Email', true), array('action' => 'delete', $profEmail['ProfEmail']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $profEmail['ProfEmail']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Prof Emails', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Prof Email', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Professores', true), array('controller' => 'professores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Professore', true), array('controller' => 'professores', 'action' => 'add')); ?> </li>
	</ul>
</div>
