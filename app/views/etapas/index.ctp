<div class="etapas index">
	<h2><?php __('Etapas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('projeto_id');?></th>
			<th><?php echo $this->Paginator->sort('etapa');?></th>
			<th><?php echo $this->Paginator->sort('planejado');?></th>
			<th><?php echo $this->Paginator->sort('finalizado');?></th>
			<th><?php echo $this->Paginator->sort('descrição');?></th>
			<th><?php echo $this->Paginator->sort('criado_em');?></th>
			<th><?php echo $this->Paginator->sort('criado_por');?></th>
			<th><?php echo $this->Paginator->sort('alterado_em');?></th>
			<th><?php echo $this->Paginator->sort('alterado_por');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($etapas as $etapa):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $etapa['Etapa']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($etapa['Projeto']['projeto'], array('controller' => 'projetos', 'action' => 'view', $etapa['Projeto']['id'])); ?>
		</td>
		<td><?php echo $etapa['Etapa']['etapa']; ?>&nbsp;</td>
		<td><?php echo $etapa['Etapa']['planejado']; ?>&nbsp;</td>
		<td><?php echo $etapa['Etapa']['finalizado']; ?>&nbsp;</td>
		<td><?php echo $etapa['Etapa']['descrição']; ?>&nbsp;</td>
		<td><?php echo $etapa['Etapa']['criado_em']; ?>&nbsp;</td>
		<td><?php echo $etapa['Etapa']['criado_por']; ?>&nbsp;</td>
		<td><?php echo $etapa['Etapa']['alterado_em']; ?>&nbsp;</td>
		<td><?php echo $etapa['Etapa']['alterado_por']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $etapa['Etapa']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $etapa['Etapa']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $etapa['Etapa']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $etapa['Etapa']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Etapa', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Projetos', true), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto', true), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
	</ul>
</div>