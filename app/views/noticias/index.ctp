<div class="noticias index">
	<h2><?php __('Noticias');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('projeto_id');?></th>
			<th><?php echo $this->Paginator->sort('titulo');?></th>
			<th><?php echo $this->Paginator->sort('noticia');?></th>
			<th><?php echo $this->Paginator->sort('criado_por');?></th>
			<th><?php echo $this->Paginator->sort('criado_em');?></th>
			<th><?php echo $this->Paginator->sort('alterado_por');?></th>
			<th><?php echo $this->Paginator->sort('alterado_em');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($noticias as $noticia):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $noticia['Noticia']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($noticia['Projeto']['projeto'], array('controller' => 'projetos', 'action' => 'view', $noticia['Projeto']['id'])); ?>
		</td>
		<td><?php echo $noticia['Noticia']['titulo']; ?>&nbsp;</td>
		<td><?php echo $noticia['Noticia']['noticia']; ?>&nbsp;</td>
		<td><?php echo $noticia['Noticia']['criado_por']; ?>&nbsp;</td>
		<td><?php echo $noticia['Noticia']['criado_em']; ?>&nbsp;</td>
		<td><?php echo $noticia['Noticia']['alterado_por']; ?>&nbsp;</td>
		<td><?php echo $noticia['Noticia']['alterado_em']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $noticia['Noticia']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $noticia['Noticia']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $noticia['Noticia']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $noticia['Noticia']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Noticia', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Projetos', true), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto', true), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
	</ul>
</div>