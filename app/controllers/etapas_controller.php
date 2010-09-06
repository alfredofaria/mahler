<?php
class EtapasController extends AppController {

	var $name = 'Etapas';

	function index() {
		$this->Etapa->recursive = 0;
		$this->set('etapas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid etapa', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('etapa', $this->Etapa->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Etapa->create();
			if ($this->Etapa->save($this->data)) {
				$this->Session->setFlash(__('The etapa has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The etapa could not be saved. Please, try again.', true));
			}
		}
		$projetos = $this->Etapa->Projeto->find('list');
		$this->set(compact('projetos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid etapa', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Etapa->save($this->data)) {
				$this->Session->setFlash(__('The etapa has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The etapa could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Etapa->read(null, $id);
		}
		$projetos = $this->Etapa->Projeto->find('list');
		$this->set(compact('projetos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for etapa', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Etapa->delete($id)) {
			$this->Session->setFlash(__('Etapa deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Etapa was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>