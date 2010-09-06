<div class="users view">
<h2><?php  __('User');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Username'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['username']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Password'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['password']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Criado Em'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['criado_em']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Criado Por'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['criado_por']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Alterado Em'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['alterado_em']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Alterado Por'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['alterado_por']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User', true), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete User', true), array('action' => 'delete', $user['User']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Atividades', true), array('controller' => 'atividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Atividade', true), array('controller' => 'atividades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contatos', true), array('controller' => 'contatos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contato', true), array('controller' => 'contatos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipes', true), array('controller' => 'equipes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipe', true), array('controller' => 'equipes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Membros', true), array('controller' => 'membros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Membro', true), array('controller' => 'membros', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Atividades');?></h3>
	<?php if (!empty($user['Atividade'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Atividade'); ?></th>
		<th><?php __('Inicio Planejado'); ?></th>
		<th><?php __('Termino Planejado'); ?></th>
		<th><?php __('Termino Real'); ?></th>
		<th><?php __('Atv Status Id'); ?></th>
		<th><?php __('Estimativa'); ?></th>
		<th><?php __('Estoria Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Descrição'); ?></th>
		<th><?php __('Notas'); ?></th>
		<th><?php __('Criado Por'); ?></th>
		<th><?php __('Criado Em'); ?></th>
		<th><?php __('Alterado Por'); ?></th>
		<th><?php __('Alterado Em'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Atividade'] as $atividade):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $atividade['id'];?></td>
			<td><?php echo $atividade['atividade'];?></td>
			<td><?php echo $atividade['inicio_planejado'];?></td>
			<td><?php echo $atividade['termino_planejado'];?></td>
			<td><?php echo $atividade['termino_real'];?></td>
			<td><?php echo $atividade['atv_status_id'];?></td>
			<td><?php echo $atividade['estimativa'];?></td>
			<td><?php echo $atividade['estoria_id'];?></td>
			<td><?php echo $atividade['user_id'];?></td>
			<td><?php echo $atividade['descrição'];?></td>
			<td><?php echo $atividade['notas'];?></td>
			<td><?php echo $atividade['criado_por'];?></td>
			<td><?php echo $atividade['criado_em'];?></td>
			<td><?php echo $atividade['alterado_por'];?></td>
			<td><?php echo $atividade['alterado_em'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'atividades', 'action' => 'view', $atividade['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'atividades', 'action' => 'edit', $atividade['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'atividades', 'action' => 'delete', $atividade['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $atividade['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Atividade', true), array('controller' => 'atividades', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Contatos');?></h3>
	<?php if (!empty($user['Contato'])):?>
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
		foreach ($user['Contato'] as $contato):
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
	<h3><?php __('Related Equipes');?></h3>
	<?php if (!empty($user['Equipe'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Equipe'); ?></th>
		<th><?php __('Descrição'); ?></th>
		<th><?php __('Notas'); ?></th>
		<th><?php __('Ativo'); ?></th>
		<th><?php __('Ativada Em'); ?></th>
		<th><?php __('Desativada Em'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Criado Em'); ?></th>
		<th><?php __('Criado Por'); ?></th>
		<th><?php __('Alterado Em'); ?></th>
		<th><?php __('Alterado Por'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Equipe'] as $equipe):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $equipe['id'];?></td>
			<td><?php echo $equipe['equipe'];?></td>
			<td><?php echo $equipe['descrição'];?></td>
			<td><?php echo $equipe['notas'];?></td>
			<td><?php echo $equipe['ativo'];?></td>
			<td><?php echo $equipe['ativada_em'];?></td>
			<td><?php echo $equipe['desativada_em'];?></td>
			<td><?php echo $equipe['user_id'];?></td>
			<td><?php echo $equipe['criado_em'];?></td>
			<td><?php echo $equipe['criado_por'];?></td>
			<td><?php echo $equipe['alterado_em'];?></td>
			<td><?php echo $equipe['alterado_por'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'equipes', 'action' => 'view', $equipe['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'equipes', 'action' => 'edit', $equipe['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'equipes', 'action' => 'delete', $equipe['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $equipe['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Equipe', true), array('controller' => 'equipes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Membros');?></h3>
	<?php if (!empty($user['Membro'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Nome Completo'); ?></th>
		<th><?php __('Telefone'); ?></th>
		<th><?php __('Celular'); ?></th>
		<th><?php __('Rg'); ?></th>
		<th><?php __('Cpf'); ?></th>
		<th><?php __('Rua'); ?></th>
		<th><?php __('Num Residencia'); ?></th>
		<th><?php __('Complemento'); ?></th>
		<th><?php __('Bairro'); ?></th>
		<th><?php __('Cidade'); ?></th>
		<th><?php __('Estado'); ?></th>
		<th><?php __('Notas Endereço'); ?></th>
		<th><?php __('Notas'); ?></th>
		<th><?php __('Criado Em'); ?></th>
		<th><?php __('Criado Por'); ?></th>
		<th><?php __('Alterado Em'); ?></th>
		<th><?php __('Alterado Por'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Membro'] as $membro):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $membro['id'];?></td>
			<td><?php echo $membro['user_id'];?></td>
			<td><?php echo $membro['nome_completo'];?></td>
			<td><?php echo $membro['telefone'];?></td>
			<td><?php echo $membro['celular'];?></td>
			<td><?php echo $membro['rg'];?></td>
			<td><?php echo $membro['cpf'];?></td>
			<td><?php echo $membro['rua'];?></td>
			<td><?php echo $membro['num_residencia'];?></td>
			<td><?php echo $membro['complemento'];?></td>
			<td><?php echo $membro['bairro'];?></td>
			<td><?php echo $membro['cidade'];?></td>
			<td><?php echo $membro['estado'];?></td>
			<td><?php echo $membro['notas_endereço'];?></td>
			<td><?php echo $membro['notas'];?></td>
			<td><?php echo $membro['criado_em'];?></td>
			<td><?php echo $membro['criado_por'];?></td>
			<td><?php echo $membro['alterado_em'];?></td>
			<td><?php echo $membro['alterado_por'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'membros', 'action' => 'view', $membro['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'membros', 'action' => 'edit', $membro['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'membros', 'action' => 'delete', $membro['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $membro['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Membro', true), array('controller' => 'membros', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
