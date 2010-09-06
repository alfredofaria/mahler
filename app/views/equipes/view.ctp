<div class="equipes view">
<h2><?php  __('Equipe');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $equipe['Equipe']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Equipe'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $equipe['Equipe']['equipe']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descrição'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $equipe['Equipe']['descrição']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Notas'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $equipe['Equipe']['notas']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ativo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $equipe['Equipe']['ativo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ativada Em'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $equipe['Equipe']['ativada_em']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Desativada Em'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $equipe['Equipe']['desativada_em']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($equipe['User']['username'], array('controller' => 'users', 'action' => 'view', $equipe['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Criado Em'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $equipe['Equipe']['criado_em']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Criado Por'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $equipe['Equipe']['criado_por']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Alterado Em'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $equipe['Equipe']['alterado_em']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Alterado Por'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $equipe['Equipe']['alterado_por']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Equipe', true), array('action' => 'edit', $equipe['Equipe']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Equipe', true), array('action' => 'delete', $equipe['Equipe']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $equipe['Equipe']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipes', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipe', true), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php __('Related Equi Reports');?></h3>
	<?php if (!empty($equipe['EquiReport'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Titulo'); ?></th>
		<th><?php __('Relatório'); ?></th>
		<th><?php __('Equipe Id'); ?></th>
		<th><?php __('Criado Em'); ?></th>
		<th><?php __('Criado Por'); ?></th>
		<th><?php __('Alterado Em'); ?></th>
		<th><?php __('Alterado Por'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($equipe['EquiReport'] as $equiReport):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $equiReport['id'];?></td>
			<td><?php echo $equiReport['titulo'];?></td>
			<td><?php echo $equiReport['relatório'];?></td>
			<td><?php echo $equiReport['equipe_id'];?></td>
			<td><?php echo $equiReport['criado_em'];?></td>
			<td><?php echo $equiReport['criado_por'];?></td>
			<td><?php echo $equiReport['alterado_em'];?></td>
			<td><?php echo $equiReport['alterado_por'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'equi_reports', 'action' => 'view', $equiReport['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'equi_reports', 'action' => 'edit', $equiReport['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'equi_reports', 'action' => 'delete', $equiReport['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $equiReport['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Equi Report', true), array('controller' => 'equi_reports', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Projetos');?></h3>
	<?php if (!empty($equipe['Projeto'])):?>
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
		foreach ($equipe['Projeto'] as $projeto):
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
<div class="related">
	<h3><?php __('Related Sprints');?></h3>
	<?php if (!empty($equipe['Sprint'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Sprint'); ?></th>
		<th><?php __('Inicio'); ?></th>
		<th><?php __('Termino'); ?></th>
		<th><?php __('Equipe Id'); ?></th>
		<th><?php __('Projeto Id'); ?></th>
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
		foreach ($equipe['Sprint'] as $sprint):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $sprint['id'];?></td>
			<td><?php echo $sprint['sprint'];?></td>
			<td><?php echo $sprint['inicio'];?></td>
			<td><?php echo $sprint['termino'];?></td>
			<td><?php echo $sprint['equipe_id'];?></td>
			<td><?php echo $sprint['projeto_id'];?></td>
			<td><?php echo $sprint['descrição'];?></td>
			<td><?php echo $sprint['notas'];?></td>
			<td><?php echo $sprint['criado_em'];?></td>
			<td><?php echo $sprint['criado_por'];?></td>
			<td><?php echo $sprint['alterado_em'];?></td>
			<td><?php echo $sprint['alterado_por'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'sprints', 'action' => 'view', $sprint['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'sprints', 'action' => 'edit', $sprint['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'sprints', 'action' => 'delete', $sprint['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $sprint['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Sprint', true), array('controller' => 'sprints', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Users');?></h3>
	<?php if (!empty($equipe['User'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Username'); ?></th>
		<th><?php __('Password'); ?></th>
		<th><?php __('Criado Em'); ?></th>
		<th><?php __('Criado Por'); ?></th>
		<th><?php __('Alterado Em'); ?></th>
		<th><?php __('Alterado Por'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($equipe['User'] as $user):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $user['id'];?></td>
			<td><?php echo $user['username'];?></td>
			<td><?php echo $user['password'];?></td>
			<td><?php echo $user['criado_em'];?></td>
			<td><?php echo $user['criado_por'];?></td>
			<td><?php echo $user['alterado_em'];?></td>
			<td><?php echo $user['alterado_por'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'users', 'action' => 'delete', $user['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
