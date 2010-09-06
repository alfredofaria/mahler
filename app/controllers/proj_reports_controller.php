<?php
class ProjReportsController extends AppController {

	var $name = 'ProjReports';

	function index() {
		$this->ProjReport->recursive = 0;
		$this->set('projReports', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid proj report', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('projReport', $this->ProjReport->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->ProjReport->create();
			if ($this->ProjReport->save($this->data)) {
				$this->Session->setFlash(__('The proj report has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proj report could not be saved. Please, try again.', true));
			}
		}
		$projetos = $this->ProjReport->Projeto->find('list');
		$projRepStatuses = $this->ProjReport->ProjRepStatus->find('list');
		$this->set(compact('projetos', 'projRepStatuses'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid proj report', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ProjReport->save($this->data)) {
				$this->Session->setFlash(__('The proj report has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proj report could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ProjReport->read(null, $id);
		}
		$projetos = $this->ProjReport->Projeto->find('list');
		$projRepStatuses = $this->ProjReport->ProjRepStatus->find('list');
		$this->set(compact('projetos', 'projRepStatuses'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for proj report', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ProjReport->delete($id)) {
			$this->Session->setFlash(__('Proj report deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Proj report was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>