<?php
class ContatosController extends AppController {

	var $name = 'Contatos';

	function index() {
		$this->Contato->recursive = 0;
		$this->set('contatos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid contato', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('contato', $this->Contato->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Contato->create();
			if ($this->Contato->save($this->data)) {
				$this->Session->setFlash(__('The contato has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contato could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Contato->User->find('list');
		$projetos = $this->Contato->Projeto->find('list');
		$this->set(compact('users', 'projetos'));
	}

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