<div class="profEmails index">
	<h2><?php __('Prof Emails');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('professore_id');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('primario');?></th>
			<th><?php echo $this->Paginator->sort('opted_out');?></th>
			<th><?php echo $this->Paginator->sort('invalido');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($profEmails as $profEmail):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $profEmail['ProfEmail']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($profEmail['Professore']['nome'], array('controller' => 'professores', 'action' => 'view', $profEmail['Professore']['id'])); ?>
		</td>
		<td><?php echo $profEmail['ProfEmail']['email']; ?>&nbsp;</td>
		<td><?php echo $profEmail['ProfEmail']['primario']; ?>&nbsp;</td>
		<td><?php echo $profEmail['ProfEmail']['opted_out']; ?>&nbsp;</td>
		<td><?php echo $profEmail['ProfEmail']['invalido']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $profEmail['ProfEmail']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $profEmail['ProfEmail']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $profEmail['ProfEmail']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $profEmail['ProfEmail']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Prof Email', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Professores', true), array('controller' => 'professores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Professore', true), array('controller' => 'professores', 'action' => 'add')); ?> </li>
	</ul>
</div>