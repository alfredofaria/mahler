<div class="contatos form">
<?php echo $this->Form->create('Contato');?>
	<fieldset>
 		<legend><?php __('Add Contato'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('nome');
		echo $this->Form->input('pessoa_fisica');
		echo $this->Form->input('telefone');
		echo $this->Form->input('celular');
		echo $this->Form->input('nascimento');
		echo $this->Form->input('rg_ie');
		echo $this->Form->input('cpf_cnpj');
		echo $this->Form->input('website');
		echo $this->Form->input('rua');
		echo $this->Form->input('num_residencia');
		echo $this->Form->input('complemento');
		echo $this->Form->input('bairro');
		echo $this->Form->input('cidade');
		echo $this->Form->input('estado');
		echo $this->Form->input('notas_endereco');
		echo $this->Form->input('notas');
		echo $this->Form->input('criado_em');
		echo $this->Form->input('criado_por');
		echo $this->Form->input('alterado_em');
		echo $this->Form->input('alterado_por');
		echo $this->Form->input('Projeto');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Contatos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projetos', true), array('controller' => 'projetos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projeto', true), array('controller' => 'projetos', 'action' => 'add')); ?> </li>
	</ul>
</div>