<div class="membros index">
	<h2><?php __('Membros');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('nome_completo');?></th>
			<th><?php echo $this->Paginator->sort('telefone');?></th>
			<th><?php echo $this->Paginator->sort('celular');?></th>
			<th><?php echo $this->Paginator->sort('rg');?></th>
			<th><?php echo $this->Paginator->sort('cpf');?></th>
			<th><?php echo $this->Paginator->sort('rua');?></th>
			<th><?php echo $this->Paginator->sort('num_residencia');?></th>
			<th><?php echo $this->Paginator->sort('complemento');?></th>
			<th><?php echo $this->Paginator->sort('bairro');?></th>
			<th><?php echo $this->Paginator->sort('cidade');?></th>
			<th><?php echo $this->Paginator->sort('estado');?></th>
			<th><?php echo $this->Paginator->sort('notas_endereço');?></th>
			<th><?php echo $this->Paginator->sort('notas');?></th>
			<th><?php echo $this->Paginator->sort('criado_em');?></th>
			<th><?php echo $this->Paginator->sort('criado_por');?></th>
			<th><?php echo $this->Paginator->sort('alterado_em');?></th>
			<th><?php echo $this->Paginator->sort('alterado_por');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($membros as $membro):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $membro['Membro']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($membro['User']['username'], array('controller' => 'users', 'action' => 'view', $membro['User']['id'])); ?>
		</td>
		<td><?php echo $membro['Membro']['nome_completo']; ?>&nbsp;</td>
		<td><?php echo $membro['Membro']['telefone']; ?>&nbsp;</td>
		<td><?php echo $membro['Membro']['celular']; ?>&nbsp;</td>
		<td><?php echo $membro['Membro']['rg']; ?>&nbsp;</td>
		<td><?php echo $membro['Membro']['cpf']; ?>&nbsp;</td>
		<td><?php echo $membro['Membro']['rua']; ?>&nbsp;</td>
		<td><?php echo $membro['Membro']['num_residencia']; ?>&nbsp;</td>
		<td><?php echo $membro['Membro']['complemento']; ?>&nbsp;</td>
		<td><?php echo $membro['Membro']['bairro']; ?>&nbsp;</td>
		<td><?php echo $membro['Membro']['cidade']; ?>&nbsp;</td>
		<td><?php echo $membro['Membro']['estado']; ?>&nbsp;</td>
		<td><?php echo $membro['Membro']['notas_endereço']; ?>&nbsp;</td>
		<td><?php echo $membro['Membro']['notas']; ?>&nbsp;</td>
		<td><?php echo $membro['Membro']['criado_em']; ?>&nbsp;</td>
		<td><?php echo $membro['Membro']['criado_por']; ?>&nbsp;</td>
		<td><?php echo $membro['Membro']['alterado_em']; ?>&nbsp;</td>
		<td><?php echo $membro['Membro']['alterado_por']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $membro['Membro']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $membro['Membro']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $membro['Membro']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $membro['Membro']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Membro', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>