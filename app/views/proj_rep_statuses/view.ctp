<div class="projRepStatuses view">
<h2><?php  __('Proj Rep Status');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $projRepStatus['ProjRepStatus']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Status'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $projRepStatus['ProjRepStatus']['status']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descrição'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $projRepStatus['ProjRepStatus']['descrição']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Proj Rep Status', true), array('action' => 'edit', $projRepStatus['ProjRepStatus']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Proj Rep Status', true), array('action' => 'delete', $projRepStatus['ProjRepStatus']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $projRepStatus['ProjRepStatus']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Proj Rep Statuses', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proj Rep Status', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proj Reports', true), array('controller' => 'proj_reports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proj Report', true), array('controller' => 'proj_reports', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Proj Reports');?></h3>
	<?php if (!empty($projRepStatus['ProjReport'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Projeto Id'); ?></th>
		<th><?php __('Proj Rep Status Id'); ?></th>
		<th><?php __('Relatório'); ?></th>
		<th><?php __('Criado Por'); ?></th>
		<th><?php __('Criado Em'); ?></th>
		<th><?php __('Alterado Por'); ?></th>
		<th><?php __('Alterado Em'); ?></th>
		<th><?php __('Titulo'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($projRepStatus['ProjReport'] as $projReport):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $projReport['id'];?></td>
			<td><?php echo $projReport['projeto_id'];?></td>
			<td><?php echo $projReport['proj_rep_status_id'];?></td>
			<td><?php echo $projReport['relatório'];?></td>
			<td><?php echo $projReport['criado_por'];?></td>
			<td><?php echo $projReport['criado_em'];?></td>
			<td><?php echo $projReport['alterado_por'];?></td>
			<td><?php echo $projReport['alterado_em'];?></td>
			<td><?php echo $projReport['titulo'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'proj_reports', 'action' => 'view', $projReport['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'proj_reports', 'action' => 'edit', $projReport['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'proj_reports', 'action' => 'delete', $projReport['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $projReport['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Proj Report', true), array('controller' => 'proj_reports', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
