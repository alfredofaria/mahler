<div class="equiReports view">
<h2><?php  __('Equi Report');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $equiReport['EquiReport']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Titulo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $equiReport['EquiReport']['titulo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Relatório'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $equiReport['EquiReport']['relatório']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Equipe'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($equiReport['Equipe']['equipe'], array('controller' => 'equipes', 'action' => 'view', $equiReport['Equipe']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Criado Em'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $equiReport['EquiReport']['criado_em']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Criado Por'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $equiReport['EquiReport']['criado_por']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Alterado Em'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $equiReport['EquiReport']['alterado_em']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Alterado Por'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $equiReport['EquiReport']['alterado_por']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Equi Report', true), array('action' => 'edit', $equiReport['EquiReport']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Equi Report', true), array('action' => 'delete', $equiReport['EquiReport']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $equiReport['EquiReport']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Equi Reports', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equi Report', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipes', true), array('controller' => 'equipes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipe', true), array('controller' => 'equipes', 'action' => 'add')); ?> </li>
	</ul>
</div>
