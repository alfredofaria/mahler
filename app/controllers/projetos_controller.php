<?php
class ProjetosController extends AppController {

	var $name = 'Projetos';

	function index() {
		$this->Projeto->recursive = 0;
		$this->set('projetos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid projeto', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('projeto', $this->Projeto->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Projeto->create();
			if ($this->Projeto->save($this->data)) {
				$this->Session->setFlash(__('The projeto has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The projeto could not be saved. Please, try again.', true));
			}
		}
		$projTipos = $this->Projeto->ProjTipo->find('list');
		$equipes = $this->Projeto->Equipe->find('list');
		$contatos = $this->Projeto->Contato->find('list');
		$contatos = $this->Projeto->Contato->find('list');
		$professores = $this->Projeto->Professore->find('list');
		$this->set(compact('projTipos', 'equipes', 'contatos', 'contatos', 'professores'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid projeto', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Projeto->save($this->data)) {
				$this->Session->setFlash(__('The projeto has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The projeto could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Projeto->read(null, $id);
		}
		$projTipos = $this->Projeto->ProjTipo->find('list');
		$equipes = $this->Projeto->Equipe->find('list');
		$contatos = $this->Projeto->Contato->find('list');
		$contatos = $this->Projeto->Contato->find('list');
		$professores = $this->Projeto->Professore->find('list');
		$this->set(compact('projTipos', 'equipes', 'contatos', 'contatos', 'professores'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for projeto', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Projeto->delete($id)) {
			$this->Session->setFlash(__('Projeto deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Projeto was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>