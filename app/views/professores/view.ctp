<div class="professores view">
<h2><?php  __('Professore');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $professore['Professore']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nome'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $professore['Professore']['nome']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nome Completo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $professore['Professore']['nome_completo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nascimento'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $professore['Professore']['nascimento']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Departamento'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $professore['Professore']['departamento']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Telefone'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $professore['Professore']['telefone']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sala'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $professore['Professore']['sala']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Unidade'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $professore['Professore']['unidade']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Area De Atuação'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $professore['Professore']['area de atuação']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Notas'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $professore['Professore']['notas']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Criado Em'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $professore['Professore']['criado_em']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Criado Por'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $professore['Professore']['criado_por']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Alterado Em'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $professore['Professore']['alterado_em']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Alterado Por'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $professore['Professore']['alterado_por']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Professore', true), array('action' => 'edit', $professore['Professore']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Professore', true), array('action' => 'delete', $professore['Professore']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $professore['Professore']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Professores', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Professore', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Prof Emails', true), array('controller' => 'prof_emails', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Prof Email', true), array('controller' => 'prof_emails', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projetos', true), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto', true), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Prof Emails');?></h3>
	<?php if (!empty($professore['ProfEmail'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Professore Id'); ?></th>
		<th><?php __('Email'); ?></th>
		<th><?php __('Primario'); ?></th>
		<th><?php __('Opted Out'); ?></th>
		<th><?php __('Invalido'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($professore['ProfEmail'] as $profEmail):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $profEmail['id'];?></td>
			<td><?php echo $profEmail['professore_id'];?></td>
			<td><?php echo $profEmail['email'];?></td>
			<td><?php echo $profEmail['primario'];?></td>
			<td><?php echo $profEmail['opted_out'];?></td>
			<td><?php echo $profEmail['invalido'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'prof_emails', 'action' => 'view', $profEmail['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'prof_emails', 'action' => 'edit', $profEmail['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'prof_emails', 'action' => 'delete', $profEmail['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $profEmail['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Prof Email', true), array('controller' => 'prof_emails', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Projetos');?></h3>
	<?php if (!empty($professore['Projeto'])):?>
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
		foreach ($professore['Projeto'] as $projeto):
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
