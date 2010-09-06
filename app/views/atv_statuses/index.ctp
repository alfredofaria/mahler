<div class="atvStatuses index">
	<h2><?php __('Atv Statuses');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('status');?></th>
			<th><?php echo $this->Paginator->sort('descricao');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($atvStatuses as $atvStatus):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $atvStatus['AtvStatus']['id']; ?>&nbsp;</td>
		<td><?php echo $atvStatus['AtvStatus']['status']; ?>&nbsp;</td>
		<td><?php echo $atvStatus['AtvStatus']['descricao']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $atvStatus['AtvStatus']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $atvStatus['AtvStatus']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $atvStatus['AtvStatus']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $atvStatus['AtvStatus']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Atv Status', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Atividades', true), array('controller' => 'atividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Atividade', true), array('controller' => 'atividades', 'action' => 'add')); ?> </li>
	</ul>
</div>