<div class="projTipos index">
	<h2><?php __('Proj Tipos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('tipo');?></th>
			<th><?php echo $this->Paginator->sort('descrição');?></th>
			<th><?php echo $this->Paginator->sort('ativo');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($projTipos as $projTipo):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $projTipo['ProjTipo']['id']; ?>&nbsp;</td>
		<td><?php echo $projTipo['ProjTipo']['tipo']; ?>&nbsp;</td>
		<td><?php echo $projTipo['ProjTipo']['descrição']; ?>&nbsp;</td>
		<td><?php echo $projTipo['ProjTipo']['ativo']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $projTipo['ProjTipo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $projTipo['ProjTipo']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $projTipo['ProjTipo']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $projTipo['ProjTipo']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Proj Tipo', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Projetos', true), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto', true), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
	</ul>
</div>