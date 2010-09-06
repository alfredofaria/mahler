<div class="equipes index">
	<h2><?php __('Equipes');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('equipe');?></th>
			<th><?php echo $this->Paginator->sort('descrição');?></th>
			<th><?php echo $this->Paginator->sort('notas');?></th>
			<th><?php echo $this->Paginator->sort('ativo');?></th>
			<th><?php echo $this->Paginator->sort('ativada_em');?></th>
			<th><?php echo $this->Paginator->sort('desativada_em');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('criado_em');?></th>
			<th><?php echo $this->Paginator->sort('criado_por');?></th>
			<th><?php echo $this->Paginator->sort('alterado_em');?></th>
			<th><?php echo $this->Paginator->sort('alterado_por');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($equipes as $equipe):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $equipe['Equipe']['id']; ?>&nbsp;</td>
		<td><?php echo $equipe['Equipe']['equipe']; ?>&nbsp;</td>
		<td><?php echo $equipe['Equipe']['descrição']; ?>&nbsp;</td>
		<td><?php echo $equipe['Equipe']['notas']; ?>&nbsp;</td>
		<td><?php echo $equipe['Equipe']['ativo']; ?>&nbsp;</td>
		<td><?php echo $equipe['Equipe']['ativada_em']; ?>&nbsp;</td>
		<td><?php echo $equipe['Equipe']['desativada_em']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($equipe['User']['username'], array('controller' => 'users', 'action' => 'view', $equipe['User']['id'])); ?>
		</td>
		<td><?php echo $equipe['Equipe']['criado_em']; ?>&nbsp;</td>
		<td><?php echo $equipe['Equipe']['criado_por']; ?>&nbsp;</td>
		<td><?php echo $equipe['Equipe']['alterado_em']; ?>&nbsp;</td>
		<td><?php echo $equipe['Equipe']['alterado_por']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $equipe['Equipe']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $equipe['Equipe']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $equipe['Equipe']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $equipe['Equipe']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Equipe', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Equi Reports', true), array('controller' => 'equi_reports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equi Report', true), array('controller' => 'equi_reports', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projetos', true), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto', true), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sprints', true), array('controller' => 'sprints', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sprint', true), array('controller' => 'sprints', 'action' => 'add')); ?> </li>
	</ul>
</div>