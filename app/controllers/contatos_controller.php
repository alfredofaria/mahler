<?php
class ContatosController extends AppController {

	var $name = 'Contatos';
	var $components = array('CrudContato');
	var $helpers = array('CrudContato');

	function index() {
		$this->Contato->recursive = 0;
		$this->set('contatos', $this->paginate());
	}

	/*function view($id = null)
	{
		$this->CrudContato->setView($id);
	}*/
	
	function view($id = null)
	{
		if (!$id)
		{
			$this->Session->setFlash('Contato Inválido');
		}
		else
		{
			App::import('Model', 'Contato');
			$Contato = new Contato;
			$this->Session->write('CrudContato',$Contato->read(null, $id));
		}
	} 


	function add()
	{		
		if (!empty($this->data))
		{
			//coisas que são necessárias para salvar
			$this->data['criado_por'] = 1;
			$this->data['criado_em'] = '2010-09-07 15:18:33';
			$this->data['id'] = 1;
		
			$this->Contato->create();
			if ($this->Contato->save($this->data))
			{
				$this->Session->setFlash('O contato foi salvo.');
				$this->redirect(array('action' => 'index'));
			} 
			else
			{
				debug($this->data);
				$this->Session->setFlash('O contato não pôde ser salvo. Por favor, tente novamente.');
			}
		}
		$users = $this->Contato->User->find('list');
		$projetos = $this->Contato->Projeto->find('list');
		$this->set(compact('users', 'projetos'));
	}

	/*function add()
	{
		$this->CrudContato->setAdd();
	}*/

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid contato', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Contato->save($this->data)) {
				$this->Session->setFlash(__('The contato has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contato could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Contato->read(null, $id);
		}
		$users = $this->Contato->User->find('list');
		$projetos = $this->Contato->Projeto->find('list');
		$this->set(compact('users', 'projetos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for contato', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Contato->delete($id)) {
			$this->Session->setFlash(__('Contato deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Contato was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>
