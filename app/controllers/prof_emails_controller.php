<?php
class ProfEmailsController extends AppController {

	var $name = 'ProfEmails';

	function index() {
		$this->ProfEmail->recursive = 0;
		$this->set('profEmails', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid prof email', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('profEmail', $this->ProfEmail->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->ProfEmail->create();
			if ($this->ProfEmail->save($this->data)) {
				$this->Session->setFlash(__('The prof email has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The prof email could not be saved. Please, try again.', true));
			}
		}
		$professores = $this->ProfEmail->Professore->find('list');
		$this->set(compact('professores'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid prof email', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ProfEmail->save($this->data)) {
				$this->Session->setFlash(__('The prof email has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The prof email could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ProfEmail->read(null, $id);
		}
		$professores = $this->ProfEmail->Professore->find('list');
		$this->set(compact('professores'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for prof email', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ProfEmail->delete($id)) {
			$this->Session->setFlash(__('Prof email deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Prof email was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>