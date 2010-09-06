<div class="equiReports index">
	<h2><?php __('Equi Reports');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('titulo');?></th>
			<th><?php echo $this->Paginator->sort('relatório');?></th>
			<th><?php echo $this->Paginator->sort('equipe_id');?></th>
			<th><?php echo $this->Paginator->sort('criado_em');?></th>
			<th><?php echo $this->Paginator->sort('criado_por');?></th>
			<th><?php echo $this->Paginator->sort('alterado_em');?></th>
			<th><?php echo $this->Paginator->sort('alterado_por');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($equiReports as $equiReport):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $equiReport['EquiReport']['id']; ?>&nbsp;</td>
		<td><?php echo $equiReport['EquiReport']['titulo']; ?>&nbsp;</td>
		<td><?php echo $equiReport['EquiReport']['relatório']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($equiReport['Equipe']['equipe'], array('controller' => 'equipes', 'action' => 'view', $equiReport['Equipe']['id'])); ?>
		</td>
		<td><?php echo $equiReport['EquiReport']['criado_em']; ?>&nbsp;</td>
		<td><?php echo $equiReport['EquiReport']['criado_por']; ?>&nbsp;</td>
		<td><?php echo $equiReport['EquiReport']['alterado_em']; ?>&nbsp;</td>
		<td><?php echo $equiReport['EquiReport']['alterado_por']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $equiReport['EquiReport']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $equiReport['EquiReport']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $equiReport['EquiReport']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $equiReport['EquiReport']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Equi Report', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Equipes', true), array('controller' => 'equipes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipe', true), array('controller' => 'equipes', 'action' => 'add')); ?> </li>
	</ul>
</div>