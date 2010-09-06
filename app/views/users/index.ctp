<div class="users index">
	<h2><?php __('Users');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('username');?></th>
			<th><?php echo $this->Paginator->sort('password');?></th>
			<th><?php echo $this->Paginator->sort('criado_em');?></th>
			<th><?php echo $this->Paginator->sort('criado_por');?></th>
			<th><?php echo $this->Paginator->sort('alterado_em');?></th>
			<th><?php echo $this->Paginator->sort('alterado_por');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($users as $user):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $user['User']['id']; ?>&nbsp;</td>
		<td><?php echo $user['User']['username']; ?>&nbsp;</td>
		<td><?php echo $user['User']['password']; ?>&nbsp;</td>
		<td><?php echo $user['User']['criado_em']; ?>&nbsp;</td>
		<td><?php echo $user['User']['criado_por']; ?>&nbsp;</td>
		<td><?php echo $user['User']['alterado_em']; ?>&nbsp;</td>
		<td><?php echo $user['User']['alterado_por']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $user['User']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New User', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Atividades', true), array('controller' => 'atividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Atividade', true), array('controller' => 'atividades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contatos', true), array('controller' => 'contatos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contato', true), array('controller' => 'contatos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipes', true), array('controller' => 'equipes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipe', true), array('controller' => 'equipes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Membros', true), array('controller' => 'membros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Membro', true), array('controller' => 'membros', 'action' => 'add')); ?> </li>
	</ul>
</div>