<div class="projReports index">
	<h2><?php __('Proj Reports');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('projeto_id');?></th>
			<th><?php echo $this->Paginator->sort('proj_rep_status_id');?></th>
			<th><?php echo $this->Paginator->sort('relatório');?></th>
			<th><?php echo $this->Paginator->sort('criado_por');?></th>
			<th><?php echo $this->Paginator->sort('criado_em');?></th>
			<th><?php echo $this->Paginator->sort('alterado_por');?></th>
			<th><?php echo $this->Paginator->sort('alterado_em');?></th>
			<th><?php echo $this->Paginator->sort('titulo');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($projReports as $projReport):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $projReport['ProjReport']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($projReport['Projeto']['projeto'], array('controller' => 'projetos', 'action' => 'view', $projReport['Projeto']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($projReport['ProjRepStatus']['status'], array('controller' => 'proj_rep_statuses', 'action' => 'view', $projReport['ProjRepStatus']['id'])); ?>
		</td>
		<td><?php echo $projReport['ProjReport']['relatório']; ?>&nbsp;</td>
		<td><?php echo $projReport['ProjReport']['criado_por']; ?>&nbsp;</td>
		<td><?php echo $projReport['ProjReport']['criado_em']; ?>&nbsp;</td>
		<td><?php echo $projReport['ProjReport']['alterado_por']; ?>&nbsp;</td>
		<td><?php echo $projReport['ProjReport']['alterado_em']; ?>&nbsp;</td>
		<td><?php echo $projReport['ProjReport']['titulo']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $projReport['ProjReport']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $projReport['ProjReport']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $projReport['ProjReport']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $projReport['ProjReport']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Proj Report', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Projetos', true), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto', true), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proj Rep Statuses', true), array('controller' => 'proj_rep_statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proj Rep Status', true), array('controller' => 'proj_rep_statuses', 'action' => 'add')); ?> </li>
	</ul>
</div>