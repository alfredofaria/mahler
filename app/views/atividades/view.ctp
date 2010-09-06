<div class="atividades view">
<h2><?php  __('Atividade');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $atividade['Atividade']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Atividade'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $atividade['Atividade']['atividade']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Inicio Planejado'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $atividade['Atividade']['inicio_planejado']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Termino Planejado'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $atividade['Atividade']['termino_planejado']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Termino Real'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $atividade['Atividade']['termino_real']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Atv Status'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($atividade['AtvStatus']['status'], array('controller' => 'atv_statuses', 'action' => 'view', $atividade['AtvStatus']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Estimativa'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $atividade['Atividade']['estimativa']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Estoria'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($atividade['Estoria']['estoria'], array('controller' => 'estorias', 'action' => 'view', $atividade['Estoria']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($atividade['User']['username'], array('controller' => 'users', 'action' => 'view', $atividade['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descrição'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $atividade['Atividade']['descrição']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Notas'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $atividade['Atividade']['notas']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Criado Por'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $atividade['Atividade']['criado_por']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Criado Em'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $atividade['Atividade']['criado_em']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Alterado Por'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $atividade['Atividade']['alterado_por']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Alterado Em'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $atividade['Atividade']['alterado_em']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Atividade', true), array('action' => 'edit', $atividade['Atividade']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Atividade', true), array('action' => 'delete', $atividade['Atividade']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $atividade['Atividade']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Atividades', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Atividade', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Atv Statuses', true), array('controller' => 'atv_statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Atv Status', true), array('controller' => 'atv_statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estorias', true), array('controller' => 'estorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estoria', true), array('controller' => 'estorias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
