<?php
class AtvStatusesController extends AppController {

	var $name = 'AtvStatuses';

	function index() {
		$this->AtvStatus->recursive = 0;
		$this->set('atvStatuses', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid atv status', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('atvStatus', $this->AtvStatus->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->AtvStatus->create();
			if ($this->AtvStatus->save($this->data)) {
				$this->Session->setFlash(__('The atv status has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The atv status could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid atv status', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->AtvStatus->save($this->data)) {
				$this->Session->setFlash(__('The atv status has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The atv status could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AtvStatus->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for atv status', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AtvStatus->delete($id)) {
			$this->Session->setFlash(__('Atv status deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Atv status was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>