<div class="atvStatuses view">
<h2><?php  __('Atv Status');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $atvStatus['AtvStatus']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Status'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $atvStatus['AtvStatus']['status']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descricao'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $atvStatus['AtvStatus']['descricao']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Atv Status', true), array('action' => 'edit', $atvStatus['AtvStatus']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Atv Status', true), array('action' => 'delete', $atvStatus['AtvStatus']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $atvStatus['AtvStatus']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Atv Statuses', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Atv Status', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Atividades', true), array('controller' => 'atividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Atividade', true), array('controller' => 'atividades', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Atividades');?></h3>
	<?php if (!empty($atvStatus['Atividade'])):?>
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
		foreach ($atvStatus['Atividade'] as $atividade):
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
