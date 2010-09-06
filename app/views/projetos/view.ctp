<div class="projetos view">
<h2><?php  __('Projeto');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $projeto['Projeto']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Projeto'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $projeto['Projeto']['projeto']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Proj Tipo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($projeto['ProjTipo']['tipo'], array('controller' => 'proj_tipos', 'action' => 'view', $projeto['ProjTipo']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Equipe'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($projeto['Equipe']['equipe'], array('controller' => 'equipes', 'action' => 'view', $projeto['Equipe']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Contato'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($projeto['Contato']['nome'], array('controller' => 'contatos', 'action' => 'view', $projeto['Contato']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Inicio'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $projeto['Projeto']['inicio']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Termino'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $projeto['Projeto']['termino']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descricao'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $projeto['Projeto']['descricao']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Escopo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $projeto['Projeto']['escopo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Justificativa'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $projeto['Projeto']['justificativa']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Notas'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $projeto['Projeto']['notas']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Criado Em'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $projeto['Projeto']['criado_em']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Criado Por'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $projeto['Projeto']['criado_por']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Alterado Em'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $projeto['Projeto']['alterado_em']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Alterado Por'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $projeto['Projeto']['alterado_por']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Projeto', true), array('action' => 'edit', $projeto['Projeto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Projeto', true), array('action' => 'delete', $projeto['Projeto']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $projeto['Projeto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Projetos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto', true), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php __('Related Etapas');?></h3>
	<?php if (!empty($projeto['Etapa'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Projeto Id'); ?></th>
		<th><?php __('Etapa'); ?></th>
		<th><?php __('Planejado'); ?></th>
		<th><?php __('Finalizado'); ?></th>
		<th><?php __('Descrição'); ?></th>
		<th><?php __('Criado Em'); ?></th>
		<th><?php __('Criado Por'); ?></th>
		<th><?php __('Alterado Em'); ?></th>
		<th><?php __('Alterado Por'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($projeto['Etapa'] as $etapa):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $etapa['id'];?></td>
			<td><?php echo $etapa['projeto_id'];?></td>
			<td><?php echo $etapa['etapa'];?></td>
			<td><?php echo $etapa['planejado'];?></td>
			<td><?php echo $etapa['finalizado'];?></td>
			<td><?php echo $etapa['descrição'];?></td>
			<td><?php echo $etapa['criado_em'];?></td>
			<td><?php echo $etapa['criado_por'];?></td>
			<td><?php echo $etapa['alterado_em'];?></td>
			<td><?php echo $etapa['alterado_por'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'etapas', 'action' => 'view', $etapa['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'etapas', 'action' => 'edit', $etapa['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'etapas', 'action' => 'delete', $etapa['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $etapa['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Etapa', true), array('controller' => 'etapas', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Noticias');?></h3>
	<?php if (!empty($projeto['Noticia'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Projeto Id'); ?></th>
		<th><?php __('Titulo'); ?></th>
		<th><?php __('Noticia'); ?></th>
		<th><?php __('Criado Por'); ?></th>
		<th><?php __('Criado Em'); ?></th>
		<th><?php __('Alterado Por'); ?></th>
		<th><?php __('Alterado Em'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($projeto['Noticia'] as $noticia):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $noticia['id'];?></td>
			<td><?php echo $noticia['projeto_id'];?></td>
			<td><?php echo $noticia['titulo'];?></td>
			<td><?php echo $noticia['noticia'];?></td>
			<td><?php echo $noticia['criado_por'];?></td>
			<td><?php echo $noticia['criado_em'];?></td>
			<td><?php echo $noticia['alterado_por'];?></td>
			<td><?php echo $noticia['alterado_em'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'noticias', 'action' => 'view', $noticia['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'noticias', 'action' => 'edit', $noticia['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'noticias', 'action' => 'delete', $noticia['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $noticia['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Noticia', true), array('controller' => 'noticias', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Proj Reports');?></h3>
	<?php if (!empty($projeto['ProjReport'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Projeto Id'); ?></th>
		<th><?php __('Proj Rep Status Id'); ?></th>
		<th><?php __('Relatório'); ?></th>
		<th><?php __('Criado Por'); ?></th>
		<th><?php __('Criado Em'); ?></th>
		<th><?php __('Alterado Por'); ?></th>
		<th><?php __('Alterado Em'); ?></th>
		<th><?php __('Titulo'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($projeto['ProjReport'] as $projReport):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $projReport['id'];?></td>
			<td><?php echo $projReport['projeto_id'];?></td>
			<td><?php echo $projReport['proj_rep_status_id'];?></td>
			<td><?php echo $projReport['relatório'];?></td>
			<td><?php echo $projReport['criado_por'];?></td>
			<td><?php echo $projReport['criado_em'];?></td>
			<td><?php echo $projReport['alterado_por'];?></td>
			<td><?php echo $projReport['alterado_em'];?></td>
			<td><?php echo $projReport['titulo'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'proj_reports', 'action' => 'view', $projReport['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'proj_reports', 'action' => 'edit', $projReport['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'proj_reports', 'action' => 'delete', $projReport['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $projReport['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Proj Report', true), array('controller' => 'proj_reports', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Sprints');?></h3>
	<?php if (!empty($projeto['Sprint'])):?>
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
		foreach ($projeto['Sprint'] as $sprint):
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
	<h3><?php __('Related Contatos');?></h3>
	<?php if (!empty($projeto['Contato'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Nome'); ?></th>
		<th><?php __('Pessoa Fisica'); ?></th>
		<th><?php __('Telefone'); ?></th>
		<th><?php __('Celular'); ?></th>
		<th><?php __('Nascimento'); ?></th>
		<th><?php __('Rg Ie'); ?></th>
		<th><?php __('Cpf Cnpj'); ?></th>
		<th><?php __('Website'); ?></th>
		<th><?php __('Rua'); ?></th>
		<th><?php __('Num Residencia'); ?></th>
		<th><?php __('Complemento'); ?></th>
		<th><?php __('Bairro'); ?></th>
		<th><?php __('Cidade'); ?></th>
		<th><?php __('Estado'); ?></th>
		<th><?php __('Notas Endereco'); ?></th>
		<th><?php __('Notas'); ?></th>
		<th><?php __('Criado Em'); ?></th>
		<th><?php __('Criado Por'); ?></th>
		<th><?php __('Alterado Em'); ?></th>
		<th><?php __('Alterado Por'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($projeto['Contato'] as $contato):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $contato['id'];?></td>
			<td><?php echo $contato['user_id'];?></td>
			<td><?php echo $contato['nome'];?></td>
			<td><?php echo $contato['pessoa_fisica'];?></td>
			<td><?php echo $contato['telefone'];?></td>
			<td><?php echo $contato['celular'];?></td>
			<td><?php echo $contato['nascimento'];?></td>
			<td><?php echo $contato['rg_ie'];?></td>
			<td><?php echo $contato['cpf_cnpj'];?></td>
			<td><?php echo $contato['website'];?></td>
			<td><?php echo $contato['rua'];?></td>
			<td><?php echo $contato['num_residencia'];?></td>
			<td><?php echo $contato['complemento'];?></td>
			<td><?php echo $contato['bairro'];?></td>
			<td><?php echo $contato['cidade'];?></td>
			<td><?php echo $contato['estado'];?></td>
			<td><?php echo $contato['notas_endereco'];?></td>
			<td><?php echo $contato['notas'];?></td>
			<td><?php echo $contato['criado_em'];?></td>
			<td><?php echo $contato['criado_por'];?></td>
			<td><?php echo $contato['alterado_em'];?></td>
			<td><?php echo $contato['alterado_por'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'contatos', 'action' => 'view', $contato['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'contatos', 'action' => 'edit', $contato['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'contatos', 'action' => 'delete', $contato['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $contato['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Contato', true), array('controller' => 'contatos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Professores');?></h3>
	<?php if (!empty($projeto['Professore'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Nome'); ?></th>
		<th><?php __('Nome Completo'); ?></th>
		<th><?php __('Nascimento'); ?></th>
		<th><?php __('Departamento'); ?></th>
		<th><?php __('Telefone'); ?></th>
		<th><?php __('Sala'); ?></th>
		<th><?php __('Unidade'); ?></th>
		<th><?php __('Area De Atuação'); ?></th>
		<th><?php __('Notas'); ?></th>
		<th><?php __('Criado Em'); ?></th>
		<th><?php __('Criado Por'); ?></th>
		<th><?php __('Alterado Em'); ?></th>
		<th><?php __('Alterado Por'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($projeto['Professore'] as $professore):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $professore['id'];?></td>
			<td><?php echo $professore['nome'];?></td>
			<td><?php echo $professore['nome_completo'];?></td>
			<td><?php echo $professore['nascimento'];?></td>
			<td><?php echo $professore['departamento'];?></td>
			<td><?php echo $professore['telefone'];?></td>
			<td><?php echo $professore['sala'];?></td>
			<td><?php echo $professore['unidade'];?></td>
			<td><?php echo $professore['area de atuação'];?></td>
			<td><?php echo $professore['notas'];?></td>
			<td><?php echo $professore['criado_em'];?></td>
			<td><?php echo $professore['criado_por'];?></td>
			<td><?php echo $professore['alterado_em'];?></td>
			<td><?php echo $professore['alterado_por'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'professores', 'action' => 'view', $professore['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'professores', 'action' => 'edit', $professore['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'professores', 'action' => 'delete', $professore['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $professore['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Professore', true), array('controller' => 'professores', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
