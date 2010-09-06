<div class="estorias index">
	<h2><?php __('Estorias');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('estoria');?></th>
			<th><?php echo $this->Paginator->sort('sprint_id');?></th>
			<th><?php echo $this->Paginator->sort('descrição');?></th>
			<th><?php echo $this->Paginator->sort('notas');?></th>
			<th><?php echo $this->Paginator->sort('criado_em');?></th>
			<th><?php echo $this->Paginator->sort('criado_por');?></th>
			<th><?php echo $this->Paginator->sort('alterado_em');?></th>
			<th><?php echo $this->Paginator->sort('alterado_por');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($estorias as $estoria):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $estoria['Estoria']['id']; ?>&nbsp;</td>
		<td><?php echo $estoria['Estoria']['estoria']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($estoria['Sprint']['sprint'], array('controller' => 'sprints', 'action' => 'view', $estoria['Sprint']['id'])); ?>
		</td>
		<td><?php echo $estoria['Estoria']['descrição']; ?>&nbsp;</td>
		<td><?php echo $estoria['Estoria']['notas']; ?>&nbsp;</td>
		<td><?php echo $estoria['Estoria']['criado_em']; ?>&nbsp;</td>
		<td><?php echo $estoria['Estoria']['criado_por']; ?>&nbsp;</td>
		<td><?php echo $estoria['Estoria']['alterado_em']; ?>&nbsp;</td>
		<td><?php echo $estoria['Estoria']['alterado_por']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $estoria['Estoria']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $estoria['Estoria']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $estoria['Estoria']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $estoria['Estoria']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Estoria', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Sprints', true), array('controller' => 'sprints', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sprint', true), array('controller' => 'sprints', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Atividades', true), array('controller' => 'atividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Atividade', true), array('controller' => 'atividades', 'action' => 'add')); ?> </li>
	</ul>
</div>