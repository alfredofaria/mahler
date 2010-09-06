<div class="projetos index">
	<h2><?php __('Projetos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('projeto');?></th>
			<th><?php echo $this->Paginator->sort('proj_tipo_id');?></th>
			<th><?php echo $this->Paginator->sort('equipe_id');?></th>
			<th><?php echo $this->Paginator->sort('contato_id');?></th>
			<th><?php echo $this->Paginator->sort('inicio');?></th>
			<th><?php echo $this->Paginator->sort('termino');?></th>
			<th><?php echo $this->Paginator->sort('descricao');?></th>
			<th><?php echo $this->Paginator->sort('escopo');?></th>
			<th><?php echo $this->Paginator->sort('justificativa');?></th>
			<th><?php echo $this->Paginator->sort('notas');?></th>
			<th><?php echo $this->Paginator->sort('criado_em');?></th>
			<th><?php echo $this->Paginator->sort('criado_por');?></th>
			<th><?php echo $this->Paginator->sort('alterado_em');?></th>
			<th><?php echo $this->Paginator->sort('alterado_por');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($projetos as $projeto):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $projeto['Projeto']['id']; ?>&nbsp;</td>
		<td><?php echo $projeto['Projeto']['projeto']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($projeto['ProjTipo']['tipo'], array('controller' => 'proj_tipos', 'action' => 'view', $projeto['ProjTipo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($projeto['Equipe']['equipe'], array('controller' => 'equipes', 'action' => 'view', $projeto['Equipe']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($projeto['Contato']['nome'], array('controller' => 'contatos', 'action' => 'view', $projeto['Contato']['id'])); ?>
		</td>
		<td><?php echo $projeto['Projeto']['inicio']; ?>&nbsp;</td>
		<td><?php echo $projeto['Projeto']['termino']; ?>&nbsp;</td>
		<td><?php echo $projeto['Projeto']['descricao']; ?>&nbsp;</td>
		<td><?php echo $projeto['Projeto']['escopo']; ?>&nbsp;</td>
		<td><?php echo $projeto['Projeto']['justificativa']; ?>&nbsp;</td>
		<td><?php echo $projeto['Projeto']['notas']; ?>&nbsp;</td>
		<td><?php echo $projeto['Projeto']['criado_em']; ?>&nbsp;</td>
		<td><?php echo $projeto['Projeto']['criado_por']; ?>&nbsp;</td>
		<td><?php echo $projeto['Projeto']['alterado_em']; ?>&nbsp;</td>
		<td><?php echo $projeto['Projeto']['alterado_por']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $projeto['Projeto']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $projeto['Projeto']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $projeto['Projeto']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $projeto['Projeto']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Projeto', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Proj Tipos', true), array('controller' => 'proj_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proj Tipo', true), array('controller' => 'proj_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipes', true), array('controller' => 'equipes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipe', true), array('controller' => 'equipes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contatos', true), array('controller' => 'contatos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contato', true), array('controller' => 'contatos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Etapas', true), array('controller' => 'etapas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Etapa', true), array('controller' => 'etapas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Noticias', true), array('controller' => 'noticias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Noticia', true), array('controller' => 'noticias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proj Reports', true), array('controller' => 'proj_reports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proj Report', true), array('controller' => 'proj_reports', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sprints', true), array('controller' => 'sprints', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sprint', true), array('controller' => 'sprints', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Professores', true), array('controller' => 'professores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Professore', true), array('controller' => 'professores', 'action' => 'add')); ?> </li>
	</ul>
</div>