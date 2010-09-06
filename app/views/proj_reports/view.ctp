<div class="projReports view">
<h2><?php  __('Proj Report');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $projReport['ProjReport']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Projeto'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($projReport['Projeto']['projeto'], array('controller' => 'projetos', 'action' => 'view', $projReport['Projeto']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Proj Rep Status'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($projReport['ProjRepStatus']['status'], array('controller' => 'proj_rep_statuses', 'action' => 'view', $projReport['ProjRepStatus']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Relatório'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $projReport['ProjReport']['relatório']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Criado Por'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $projReport['ProjReport']['criado_por']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Criado Em'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $projReport['ProjReport']['criado_em']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Alterado Por'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $projReport['ProjReport']['alterado_por']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Alterado Em'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $projReport['ProjReport']['alterado_em']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Titulo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $projReport['ProjReport']['titulo']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Proj Report', true), array('action' => 'edit', $projReport['ProjReport']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Proj Report', true), array('action' => 'delete', $projReport['ProjReport']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $projReport['ProjReport']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Proj Reports', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proj Report', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projetos', true), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto', true), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proj Rep Statuses', true), array('controller' => 'proj_rep_statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proj Rep Status', true), array('controller' => 'proj_rep_statuses', 'action' => 'add')); ?> </li>
	</ul>
</div>
