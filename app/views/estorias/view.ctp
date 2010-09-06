<div class="estorias view">
<h2><?php  __('Estoria');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $estoria['Estoria']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Estoria'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $estoria['Estoria']['estoria']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sprint'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($estoria['Sprint']['sprint'], array('controller' => 'sprints', 'action' => 'view', $estoria['Sprint']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descrição'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $estoria['Estoria']['descrição']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Notas'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $estoria['Estoria']['notas']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Criado Em'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $estoria['Estoria']['criado_em']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Criado Por'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $estoria['Estoria']['criado_por']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Alterado Em'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $estoria['Estoria']['alterado_em']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Alterado Por'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $estoria['Estoria']['alterado_por']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Estoria', true), array('action' => 'edit', $estoria['Estoria']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Estoria', true), array('action' => 'delete', $estoria['Estoria']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $estoria['Estoria']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Estorias', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estoria', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sprints', true), array('controller' => 'sprints', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sprint', true), array('controller' => 'sprints', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Atividades', true), array('controller' => 'atividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Atividade', true), array('controller' => 'atividades', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Atividades');?></h3>
	<?php if (!empty($estoria['Atividade'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Atividade'); ?></th>
		<th><?php __('Inicio Planejado'); ?></th>
		<th><?php __('Termino Planejado'); ?></th>
		<th><?php __('Termino Real'); ?></th>
		<th><?php __('Atv Status Id'); ?></th>
		<th><?php __('Estimativa'); ?></th>
		<th><?php __('Estoria Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Descrição'); ?></th>
		<th><?php __('Notas'); ?></th>
		<th><?php __('Criado Por'); ?></th>
		<th><?php __('Criado Em'); ?></th>
		<th><?php __('Alterado Por'); ?></th>
		<th><?php __('Alterado Em'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($estoria['Atividade'] as $atividade):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $atividade['id'];?></td>
			<td><?php echo $atividade['atividade'];?></td>
			<td><?php echo $atividade['inicio_planejado'];?></td>
			<td><?php echo $atividade['termino_planejado'];?></td>
			<td><?php echo $atividade['termino_real'];?></td>
			<td><?php echo $atividade['atv_status_id'];?></td>
			<td><?php echo $atividade['estimativa'];?></td>
			<td><?php echo $atividade['estoria_id'];?></td>
			<td><?php echo $atividade['user_id'];?></td>
			<td><?php echo $atividade['descrição'];?></td>
			<td><?php echo $atividade['notas'];?></td>
			<td><?php echo $atividade['criado_por'];?></td>
			<td><?php echo $atividade['criado_em'];?></td>
			<td><?php echo $atividade['alterado_por'];?></td>
			<td><?php echo $atividade['alterado_em'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'atividades', 'action' => 'view', $atividade['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'atividades', 'action' => 'edit', $atividade['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'atividades', 'action' => 'delete', $atividade['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $atividade['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Atividade', true), array('controller' => 'atividades', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
