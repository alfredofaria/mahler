<?php
class ProjTiposController extends AppController {

	var $name = 'ProjTipos';

	function index() {
		$this->ProjTipo->recursive = 0;
		$this->set('projTipos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid proj tipo', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('projTipo', $this->ProjTipo->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->ProjTipo->create();
			if ($this->ProjTipo->save($this->data)) {
				$this->Session->setFlash(__('The proj tipo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proj tipo could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid proj tipo', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ProjTipo->save($this->data)) {
				$this->Session->setFlash(__('The proj tipo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proj tipo could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ProjTipo->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for proj tipo', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ProjTipo->delete($id)) {
			$this->Session->setFlash(__('Proj tipo deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Proj tipo was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>