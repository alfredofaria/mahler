<div class="projTipos view">
<h2><?php  __('Proj Tipo');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $projTipo['ProjTipo']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tipo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $projTipo['ProjTipo']['tipo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descrição'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $projTipo['ProjTipo']['descrição']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ativo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $projTipo['ProjTipo']['ativo']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Proj Tipo', true), array('action' => 'edit', $projTipo['ProjTipo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Proj Tipo', true), array('action' => 'delete', $projTipo['ProjTipo']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $projTipo['ProjTipo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Proj Tipos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proj Tipo', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projetos', true), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto', true), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Projetos');?></h3>
	<?php if (!empty($projTipo['Projeto'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Projeto'); ?></th>
		<th><?php __('Proj Tipo Id'); ?></th>
		<th><?php __('Equipe Id'); ?></th>
		<th><?php __('Contato Id'); ?></th>
		<th><?php __('Inicio'); ?></th>
		<th><?php __('Termino'); ?></th>
		<th><?php __('Descricao'); ?></th>
		<th><?php __('Escopo'); ?></th>
		<th><?php __('Justificativa'); ?></th>
		<th><?php __('Notas'); ?></th>
		<th><?php __('Criado Em'); ?></th>
		<th><?php __('Criado Por'); ?></th>
		<th><?php __('Alterado Em'); ?></th>
		<th><?php __('Alterado Por'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($projTipo['Projeto'] as $projeto):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $projeto['id'];?></td>
			<td><?php echo $projeto['projeto'];?></td>
			<td><?php echo $projeto['proj_tipo_id'];?></td>
			<td><?php echo $projeto['equipe_id'];?></td>
			<td><?php echo $projeto['contato_id'];?></td>
			<td><?php echo $projeto['inicio'];?></td>
			<td><?php echo $projeto['termino'];?></td>
			<td><?php echo $projeto['descricao'];?></td>
			<td><?php echo $projeto['escopo'];?></td>
			<td><?php echo $projeto['justificativa'];?></td>
			<td><?php echo $projeto['notas'];?></td>
			<td><?php echo $projeto['criado_em'];?></td>
			<td><?php echo $projeto['criado_por'];?></td>
			<td><?php echo $projeto['alterado_em'];?></td>
			<td><?php echo $projeto['alterado_por'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'projetos', 'action' => 'view', $projeto['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'projetos', 'action' => 'edit', $projeto['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'projetos', 'action' => 'delete', $projeto['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $projeto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Projeto', true), array('controller' => 'projetos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
