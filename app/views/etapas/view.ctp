<div class="etapas view">
<h2><?php  __('Etapa');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $etapa['Etapa']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Projeto'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($etapa['Projeto']['projeto'], array('controller' => 'projetos', 'action' => 'view', $etapa['Projeto']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Etapa'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $etapa['Etapa']['etapa']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Planejado'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $etapa['Etapa']['planejado']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Finalizado'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $etapa['Etapa']['finalizado']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descrição'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $etapa['Etapa']['descrição']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Criado Em'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $etapa['Etapa']['criado_em']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Criado Por'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $etapa['Etapa']['criado_por']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Alterado Em'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $etapa['Etapa']['alterado_em']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Alterado Por'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $etapa['Etapa']['alterado_por']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Etapa', true), array('action' => 'edit', $etapa['Etapa']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Etapa', true), array('action' => 'delete', $etapa['Etapa']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $etapa['Etapa']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Etapas', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Etapa', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projetos', true), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto', true), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
	</ul>
</div>
