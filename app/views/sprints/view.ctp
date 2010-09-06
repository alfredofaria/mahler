<div class="sprints view">
<h2><?php  __('Sprint');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sprint['Sprint']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sprint'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sprint['Sprint']['sprint']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Inicio'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sprint['Sprint']['inicio']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Termino'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sprint['Sprint']['termino']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Equipe'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($sprint['Equipe']['equipe'], array('controller' => 'equipes', 'action' => 'view', $sprint['Equipe']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Projeto'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($sprint['Projeto']['projeto'], array('controller' => 'projetos', 'action' => 'view', $sprint['Projeto']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descrição'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sprint['Sprint']['descrição']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Notas'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sprint['Sprint']['notas']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Criado Em'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sprint['Sprint']['criado_em']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Criado Por'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sprint['Sprint']['criado_por']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Alterado Em'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sprint['Sprint']['alterado_em']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Alterado Por'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sprint['Sprint']['alterado_por']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sprint', true), array('action' => 'edit', $sprint['Sprint']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Sprint', true), array('action' => 'delete', $sprint['Sprint']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $sprint['Sprint']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sprints', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sprint', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipes', true), array('controller' => 'equipes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipe', true), array('controller' => 'equipes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projetos', true), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto', true), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estorias', true), array('controller' => 'estorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estoria', true), array('controller' => 'estorias', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Estorias');?></h3>
	<?php if (!empty($sprint['Estoria'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Estoria'); ?></th>
		<th><?php __('Sprint Id'); ?></th>
		<th><?php __('Descrição'); ?></th>
		<th><?php __('Notas'); ?></th>
		<th><?php __('Criado Em'); ?></th>
		<th><?php __('Criado Por'); ?></th>
		<th><?php __('Alterado Em'); ?></th>
		<th><?php __('Alterado Por'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($sprint['Estoria'] as $estoria):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $estoria['id'];?></td>
			<td><?php echo $estoria['estoria'];?></td>
			<td><?php echo $estoria['sprint_id'];?></td>
			<td><?php echo $estoria['descrição'];?></td>
			<td><?php echo $estoria['notas'];?></td>
			<td><?php echo $estoria['criado_em'];?></td>
			<td><?php echo $estoria['criado_por'];?></td>
			<td><?php echo $estoria['alterado_em'];?></td>
			<td><?php echo $estoria['alterado_por'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'estorias', 'action' => 'view', $estoria['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'estorias', 'action' => 'edit', $estoria['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'estorias', 'action' => 'delete', $estoria['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $estoria['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Estoria', true), array('controller' => 'estorias', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
