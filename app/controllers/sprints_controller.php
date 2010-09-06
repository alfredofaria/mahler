<?php
class SprintsController extends AppController {

	var $name = 'Sprints';

	function index() {
		$this->Sprint->recursive = 0;
		$this->set('sprints', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid sprint', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('sprint', $this->Sprint->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Sprint->create();
			if ($this->Sprint->save($this->data)) {
				$this->Session->setFlash(__('The sprint has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sprint could not be saved. Please, try again.', true));
			}
		}
		$equipes = $this->Sprint->Equipe->find('list');
		$projetos = $this->Sprint->Projeto->find('list');
		$this->set(compact('equipes', 'projetos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid sprint', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Sprint->save($this->data)) {
				$this->Session->setFlash(__('The sprint has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sprint could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Sprint->read(null, $id);
		}
		$equipes = $this->Sprint->Equipe->find('list');
		$projetos = $this->Sprint->Projeto->find('list');
		$this->set(compact('equipes', 'projetos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for sprint', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Sprint->delete($id)) {
			$this->Session->setFlash(__('Sprint deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Sprint was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>