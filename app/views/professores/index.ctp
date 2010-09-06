<div class="professores index">
	<h2><?php __('Professores');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('nome');?></th>
			<th><?php echo $this->Paginator->sort('nome_completo');?></th>
			<th><?php echo $this->Paginator->sort('nascimento');?></th>
			<th><?php echo $this->Paginator->sort('departamento');?></th>
			<th><?php echo $this->Paginator->sort('telefone');?></th>
			<th><?php echo $this->Paginator->sort('sala');?></th>
			<th><?php echo $this->Paginator->sort('unidade');?></th>
			<th><?php echo $this->Paginator->sort('area de atuação');?></th>
			<th><?php echo $this->Paginator->sort('notas');?></th>
			<th><?php echo $this->Paginator->sort('criado_em');?></th>
			<th><?php echo $this->Paginator->sort('criado_por');?></th>
			<th><?php echo $this->Paginator->sort('alterado_em');?></th>
			<th><?php echo $this->Paginator->sort('alterado_por');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($professores as $professore):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $professore['Professore']['id']; ?>&nbsp;</td>
		<td><?php echo $professore['Professore']['nome']; ?>&nbsp;</td>
		<td><?php echo $professore['Professore']['nome_completo']; ?>&nbsp;</td>
		<td><?php echo $professore['Professore']['nascimento']; ?>&nbsp;</td>
		<td><?php echo $professore['Professore']['departamento']; ?>&nbsp;</td>
		<td><?php echo $professore['Professore']['telefone']; ?>&nbsp;</td>
		<td><?php echo $professore['Professore']['sala']; ?>&nbsp;</td>
		<td><?php echo $professore['Professore']['unidade']; ?>&nbsp;</td>
		<td><?php echo $professore['Professore']['area de atuação']; ?>&nbsp;</td>
		<td><?php echo $professore['Professore']['notas']; ?>&nbsp;</td>
		<td><?php echo $professore['Professore']['criado_em']; ?>&nbsp;</td>
		<td><?php echo $professore['Professore']['criado_por']; ?>&nbsp;</td>
		<td><?php echo $professore['Professore']['alterado_em']; ?>&nbsp;</td>
		<td><?php echo $professore['Professore']['alterado_por']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $professore['Professore']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $professore['Professore']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $professore['Professore']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $professore['Professore']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Professore', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Prof Emails', true), array('controller' => 'prof_emails', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Prof Email', true), array('controller' => 'prof_emails', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projetos', true), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto', true), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
	</ul>
</div>