<?php
class EquiReportsController extends AppController {

	var $name = 'EquiReports';

	function index() {
		$this->EquiReport->recursive = 0;
		$this->set('equiReports', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid equi report', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('equiReport', $this->EquiReport->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->EquiReport->create();
			if ($this->EquiReport->save($this->data)) {
				$this->Session->setFlash(__('The equi report has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The equi report could not be saved. Please, try again.', true));
			}
		}
		$equipes = $this->EquiReport->Equipe->find('list');
		$this->set(compact('equipes'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid equi report', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->EquiReport->save($this->data)) {
				$this->Session->setFlash(__('The equi report has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The equi report could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->EquiReport->read(null, $id);
		}
		$equipes = $this->EquiReport->Equipe->find('list');
		$this->set(compact('equipes'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for equi report', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->EquiReport->delete($id)) {
			$this->Session->setFlash(__('Equi report deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Equi report was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>