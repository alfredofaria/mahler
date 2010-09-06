<div class="contEmails index">
	<h2><?php __('Cont Emails');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('contatos_id');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('primario');?></th>
			<th><?php echo $this->Paginator->sort('opded_out');?></th>
			<th><?php echo $this->Paginator->sort('invalido');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($contEmails as $contEmail):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $contEmail['ContEmail']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($contEmail['Contatos']['id'], array('controller' => 'contatos', 'action' => 'view', $contEmail['Contatos']['id'])); ?>
		</td>
		<td><?php echo $contEmail['ContEmail']['email']; ?>&nbsp;</td>
		<td><?php echo $contEmail['ContEmail']['primario']; ?>&nbsp;</td>
		<td><?php echo $contEmail['ContEmail']['opded_out']; ?>&nbsp;</td>
		<td><?php echo $contEmail['ContEmail']['invalido']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $contEmail['ContEmail']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $contEmail['ContEmail']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $contEmail['ContEmail']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $contEmail['ContEmail']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Cont Email', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Contatos', true), array('controller' => 'contatos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contatos', true), array('controller' => 'contatos', 'action' => 'add')); ?> </li>
	</ul>
</div>