<?php
class EquipesController extends AppController {

	var $name = 'Equipes';

	function index() {
		$this->Equipe->recursive = 0;
		$this->set('equipes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid equipe', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('equipe', $this->Equipe->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Equipe->create();
			if ($this->Equipe->save($this->data)) {
				$this->Session->setFlash(__('The equipe has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The equipe could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Equipe->User->find('list');
		$users = $this->Equipe->User->find('list');
		$this->set(compact('users', 'users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid equipe', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Equipe->save($this->data)) {
				$this->Session->setFlash(__('The equipe has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The equipe could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Equipe->read(null, $id);
		}
		$users = $this->Equipe->User->find('list');
		$users = $this->Equipe->User->find('list');
		$this->set(compact('users', 'users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for equipe', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Equipe->delete($id)) {
			$this->Session->setFlash(__('Equipe deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Equipe was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>