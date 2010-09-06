<div class="contEmails view">
<h2><?php  __('Cont Email');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $contEmail['ContEmail']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Contatos'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($contEmail['Contatos']['id'], array('controller' => 'contatos', 'action' => 'view', $contEmail['Contatos']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $contEmail['ContEmail']['email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Primario'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $contEmail['ContEmail']['primario']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Opded Out'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $contEmail['ContEmail']['opded_out']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Invalido'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $contEmail['ContEmail']['invalido']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cont Email', true), array('action' => 'edit', $contEmail['ContEmail']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Cont Email', true), array('action' => 'delete', $contEmail['ContEmail']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $contEmail['ContEmail']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cont Emails', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cont Email', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contatos', true), array('controller' => 'contatos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contatos', true), array('controller' => 'contatos', 'action' => 'add')); ?> </li>
	</ul>
</div>
