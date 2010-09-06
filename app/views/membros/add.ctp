<div class="membros form">
<?php echo $this->Form->create('Membro');?>
	<fieldset>
 		<legend><?php __('Add Membro'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('nome_completo');
		echo $this->Form->input('telefone');
		echo $this->Form->input('celular');
		echo $this->Form->input('rg');
		echo $this->Form->input('cpf');
		echo $this->Form->input('rua');
		echo $this->Form->input('num_residencia');
		echo $this->Form->input('complemento');
		echo $this->Form->input('bairro');
		echo $this->Form->input('cidade');
		echo $this->Form->input('estado');
		echo $this->Form->input('notas_endereço');
		echo $this->Form->input('notas');
		echo $this->Form->input('criado_em');
		echo $this->Form->input('criado_por');
		echo $this->Form->input('alterado_em');
		echo $this->Form->input('alterado_por');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Membros', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>