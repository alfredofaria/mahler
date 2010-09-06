<?php
class ContEmailsController extends AppController {

	var $name = 'ContEmails';

	function index() {
		$this->ContEmail->recursive = 0;
		$this->set('contEmails', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid cont email', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('contEmail', $this->ContEmail->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->ContEmail->create();
			if ($this->ContEmail->save($this->data)) {
				$this->Session->setFlash(__('The cont email has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cont email could not be saved. Please, try again.', true));
			}
		}
		$contatos = $this->ContEmail->Contato->find('list');
		$this->set(compact('contatos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid cont email', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ContEmail->save($this->data)) {
				$this->Session->setFlash(__('The cont email has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cont email could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ContEmail->read(null, $id);
		}
		$contatos = $this->ContEmail->Contato->find('list');
		$this->set(compact('contatos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for cont email', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ContEmail->delete($id)) {
			$this->Session->setFlash(__('Cont email deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Cont email was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>