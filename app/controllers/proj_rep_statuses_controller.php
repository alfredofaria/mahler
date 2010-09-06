<?php
class ProjRepStatusesController extends AppController {

	var $name = 'ProjRepStatuses';

	function index() {
		$this->ProjRepStatus->recursive = 0;
		$this->set('projRepStatuses', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid proj rep status', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('projRepStatus', $this->ProjRepStatus->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->ProjRepStatus->create();
			if ($this->ProjRepStatus->save($this->data)) {
				$this->Session->setFlash(__('The proj rep status has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proj rep status could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid proj rep status', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ProjRepStatus->save($this->data)) {
				$this->Session->setFlash(__('The proj rep status has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proj rep status could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ProjRepStatus->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for proj rep status', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ProjRepStatus->delete($id)) {
			$this->Session->setFlash(__('Proj rep status deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Proj rep status was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>