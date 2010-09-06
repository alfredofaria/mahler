<div class="contatos index">
	<h2><?php __('Contatos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('nome');?></th>
			<th><?php echo $this->Paginator->sort('pessoa_fisica');?></th>
			<th><?php echo $this->Paginator->sort('telefone');?></th>
			<th><?php echo $this->Paginator->sort('celular');?></th>
			<th><?php echo $this->Paginator->sort('nascimento');?></th>
			<th><?php echo $this->Paginator->sort('rg_ie');?></th>
			<th><?php echo $this->Paginator->sort('cpf_cnpj');?></th>
			<th><?php echo $this->Paginator->sort('website');?></th>
			<th><?php echo $this->Paginator->sort('rua');?></th>
			<th><?php echo $this->Paginator->sort('num_residencia');?></th>
			<th><?php echo $this->Paginator->sort('complemento');?></th>
			<th><?php echo $this->Paginator->sort('bairro');?></th>
			<th><?php echo $this->Paginator->sort('cidade');?></th>
			<th><?php echo $this->Paginator->sort('estado');?></th>
			<th><?php echo $this->Paginator->sort('notas_endereco');?></th>
			<th><?php echo $this->Paginator->sort('notas');?></th>
			<th><?php echo $this->Paginator->sort('criado_em');?></th>
			<th><?php echo $this->Paginator->sort('criado_por');?></th>
			<th><?php echo $this->Paginator->sort('alterado_em');?></th>
			<th><?php echo $this->Paginator->sort('alterado_por');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($contatos as $contato):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $contato['Contato']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($contato['User']['username'], array('controller' => 'users', 'action' => 'view', $contato['User']['id'])); ?>
		</td>
		<td><?php echo $contato['Contato']['nome']; ?>&nbsp;</td>
		<td><?php echo $contato['Contato']['pessoa_fisica']; ?>&nbsp;</td>
		<td><?php echo $contato['Contato']['telefone']; ?>&nbsp;</td>
		<td><?php echo $contato['Contato']['celular']; ?>&nbsp;</td>
		<td><?php echo $contato['Contato']['nascimento']; ?>&nbsp;</td>
		<td><?php echo $contato['Contato']['rg_ie']; ?>&nbsp;</td>
		<td><?php echo $contato['Contato']['cpf_cnpj']; ?>&nbsp;</td>
		<td><?php echo $contato['Contato']['website']; ?>&nbsp;</td>
		<td><?php echo $contato['Contato']['rua']; ?>&nbsp;</td>
		<td><?php echo $contato['Contato']['num_residencia']; ?>&nbsp;</td>
		<td><?php echo $contato['Contato']['complemento']; ?>&nbsp;</td>
		<td><?php echo $contato['Contato']['bairro']; ?>&nbsp;</td>
		<td><?php echo $contato['Contato']['cidade']; ?>&nbsp;</td>
		<td><?php echo $contato['Contato']['estado']; ?>&nbsp;</td>
		<td><?php echo $contato['Contato']['notas_endereco']; ?>&nbsp;</td>
		<td><?php echo $contato['Contato']['notas']; ?>&nbsp;</td>
		<td><?php echo $contato['Contato']['criado_em']; ?>&nbsp;</td>
		<td><?php echo $contato['Contato']['criado_por']; ?>&nbsp;</td>
		<td><?php echo $contato['Contato']['alterado_em']; ?>&nbsp;</td>
		<td><?php echo $contato['Contato']['alterado_por']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $contato['Contato']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $contato['Contato']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $contato['Contato']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $contato['Contato']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Contato', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projetos', true), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto', true), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
	</ul>
</div>