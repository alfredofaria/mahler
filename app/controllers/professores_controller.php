<?php
class ProfessoresController extends AppController {

	var $name = 'Professores';

	function index() {
		$this->Professore->recursive = 0;
		$this->set('professores', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid professore', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('professore', $this->Professore->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Professore->create();
			if ($this->Professore->save($this->data)) {
				$this->Session->setFlash(__('The professore has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The professore could not be saved. Please, try again.', true));
			}
		}
		$projetos = $this->Professore->Projeto->find('list');
		$this->set(compact('projetos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid professore', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Professore->save($this->data)) {
				$this->Session->setFlash(__('The professore has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The professore could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Professore->read(null, $id);
		}
		$projetos = $this->Professore->Projeto->find('list');
		$this->set(compact('projetos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for professore', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Professore->delete($id)) {
			$this->Session->setFlash(__('Professore deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Professore was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>