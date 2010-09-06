<?php
class EstoriasController extends AppController {

	var $name = 'Estorias';

	function index() {
		$this->Estoria->recursive = 0;
		$this->set('estorias', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid estoria', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('estoria', $this->Estoria->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Estoria->create();
			if ($this->Estoria->save($this->data)) {
				$this->Session->setFlash(__('The estoria has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estoria could not be saved. Please, try again.', true));
			}
		}
		$sprints = $this->Estoria->Sprint->find('list');
		$this->set(compact('sprints'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid estoria', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Estoria->save($this->data)) {
				$this->Session->setFlash(__('The estoria has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estoria could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Estoria->read(null, $id);
		}
		$sprints = $this->Estoria->Sprint->find('list');
		$this->set(compact('sprints'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for estoria', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Estoria->delete($id)) {
			$this->Session->setFlash(__('Estoria deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Estoria was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>