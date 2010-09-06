<?php
class AtividadesController extends AppController {

	var $name = 'Atividades';

	function index() {
		$this->Atividade->recursive = 0;
		$this->set('atividades', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid atividade', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('atividade', $this->Atividade->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Atividade->create();
			if ($this->Atividade->save($this->data)) {
				$this->Session->setFlash(__('The atividade has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The atividade could not be saved. Please, try again.', true));
			}
		}
		$atvStatuses = $this->Atividade->AtvStatus->find('list');
		$estorias = $this->Atividade->Estorium->find('list');
		$users = $this->Atividade->User->find('list');
		$this->set(compact('atvStatuses', 'estorias', 'users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid atividade', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Atividade->save($this->data)) {
				$this->Session->setFlash(__('The atividade has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The atividade could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Atividade->read(null, $id);
		}
		$atvStatuses = $this->Atividade->AtvStatus->find('list');
		$estorias = $this->Atividade->Estorium->find('list');
		$users = $this->Atividade->User->find('list');
		$this->set(compact('atvStatuses', 'estorias', 'users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for atividade', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Atividade->delete($id)) {
			$this->Session->setFlash(__('Atividade deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Atividade was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>