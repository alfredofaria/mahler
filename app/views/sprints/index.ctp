<div class="sprints index">
	<h2><?php __('Sprints');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('sprint');?></th>
			<th><?php echo $this->Paginator->sort('inicio');?></th>
			<th><?php echo $this->Paginator->sort('termino');?></th>
			<th><?php echo $this->Paginator->sort('equipe_id');?></th>
			<th><?php echo $this->Paginator->sort('projeto_id');?></th>
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
	foreach ($sprints as $sprint):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $sprint['Sprint']['id']; ?>&nbsp;</td>
		<td><?php echo $sprint['Sprint']['sprint']; ?>&nbsp;</td>
		<td><?php echo $sprint['Sprint']['inicio']; ?>&nbsp;</td>
		<td><?php echo $sprint['Sprint']['termino']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($sprint['Equipe']['equipe'], array('controller' => 'equipes', 'action' => 'view', $sprint['Equipe']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($sprint['Projeto']['projeto'], array('controller' => 'projetos', 'action' => 'view', $sprint['Projeto']['id'])); ?>
		</td>
		<td><?php echo $sprint['Sprint']['descrição']; ?>&nbsp;</td>
		<td><?php echo $sprint['Sprint']['notas']; ?>&nbsp;</td>
		<td><?php echo $sprint['Sprint']['criado_em']; ?>&nbsp;</td>
		<td><?php echo $sprint['Sprint']['criado_por']; ?>&nbsp;</td>
		<td><?php echo $sprint['Sprint']['alterado_em']; ?>&nbsp;</td>
		<td><?php echo $sprint['Sprint']['alterado_por']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $sprint['Sprint']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $sprint['Sprint']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $sprint['Sprint']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $sprint['Sprint']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Sprint', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Equipes', true), array('controller' => 'equipes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipe', true), array('controller' => 'equipes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projetos', true), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto', true), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estorias', true), array('controller' => 'estorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estoria', true), array('controller' => 'estorias', 'action' => 'add')); ?> </li>
	</ul>
</div>