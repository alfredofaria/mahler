<?php
class MembrosController extends AppController {

	var $name = 'Membros';

	function index() {
		$this->Membro->recursive = 0;
		$this->set('membros', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid membro', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('membro', $this->Membro->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Membro->create();
			if ($this->Membro->save($this->data)) {
				$this->Session->setFlash(__('The membro has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The membro could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Membro->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid membro', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Membro->save($this->data)) {
				$this->Session->setFlash(__('The membro has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The membro could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Membro->read(null, $id);
		}
		$users = $this->Membro->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for membro', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Membro->delete($id)) {
			$this->Session->setFlash(__('Membro deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Membro was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>