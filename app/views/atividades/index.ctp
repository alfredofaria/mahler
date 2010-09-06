<div class="atividades index">
	<h2><?php __('Atividades');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('atividade');?></th>
			<th><?php echo $this->Paginator->sort('inicio_planejado');?></th>
			<th><?php echo $this->Paginator->sort('termino_planejado');?></th>
			<th><?php echo $this->Paginator->sort('termino_real');?></th>
			<th><?php echo $this->Paginator->sort('atv_status_id');?></th>
			<th><?php echo $this->Paginator->sort('estimativa');?></th>
			<th><?php echo $this->Paginator->sort('estoria_id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('descrição');?></th>
			<th><?php echo $this->Paginator->sort('notas');?></th>
			<th><?php echo $this->Paginator->sort('criado_por');?></th>
			<th><?php echo $this->Paginator->sort('criado_em');?></th>
			<th><?php echo $this->Paginator->sort('alterado_por');?></th>
			<th><?php echo $this->Paginator->sort('alterado_em');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($atividades as $atividade):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $atividade['Atividade']['id']; ?>&nbsp;</td>
		<td><?php echo $atividade['Atividade']['atividade']; ?>&nbsp;</td>
		<td><?php echo $atividade['Atividade']['inicio_planejado']; ?>&nbsp;</td>
		<td><?php echo $atividade['Atividade']['termino_planejado']; ?>&nbsp;</td>
		<td><?php echo $atividade['Atividade']['termino_real']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($atividade['AtvStatus']['status'], array('controller' => 'atv_statuses', 'action' => 'view', $atividade['AtvStatus']['id'])); ?>
		</td>
		<td><?php echo $atividade['Atividade']['estimativa']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($atividade['Estoria']['estoria'], array('controller' => 'estorias', 'action' => 'view', $atividade['Estoria']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($atividade['User']['username'], array('controller' => 'users', 'action' => 'view', $atividade['User']['id'])); ?>
		</td>
		<td><?php echo $atividade['Atividade']['descrição']; ?>&nbsp;</td>
		<td><?php echo $atividade['Atividade']['notas']; ?>&nbsp;</td>
		<td><?php echo $atividade['Atividade']['criado_por']; ?>&nbsp;</td>
		<td><?php echo $atividade['Atividade']['criado_em']; ?>&nbsp;</td>
		<td><?php echo $atividade['Atividade']['alterado_por']; ?>&nbsp;</td>
		<td><?php echo $atividade['Atividade']['alterado_em']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $atividade['Atividade']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $atividade['Atividade']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $atividade['Atividade']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $atividade['Atividade']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Atividade', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Atv Statuses', true), array('controller' => 'atv_statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Atv Status', true), array('controller' => 'atv_statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estorias', true), array('controller' => 'estorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estoria', true), array('controller' => 'estorias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>