<?php
class ComicsController extends AppController {
	public $helpers = array('Html', 'Form', 'Comic');

	public function index() {
		$this->set('title_for_layout', 'Index');
		$this->set('comics', $this->Comic->find('all'));
	}

	public function view($id = null) {
		$this->set('title_for_layout', 'View');
		$this->Comic->id = $id;
		$this->set('comic', $this->Comic->read());
	}

	public function edit($id = null) {
		$this->set('title_for_layout', 'Edit');
		$this->Comic->id = $id;
		if ($this->request->is('get')) {
			$this->request->data = $this->Comic->read();
		} else {
			if ($this->Comic->save($this->request->data)) {
				$this->Session->setFlash('Your comic was updated successfully.');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Unable to update post.');
			}
		}
	}

	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		if ($this->Comic->delete($id)) {
			$this->Session->setFlash('The comic with id: ' . $id . ' has been deleted.');
			$this->redirect(array('action' => 'index'));
		}
	}
	
	public function add() {
		$this->set('title_for_layout', 'Add');
		if ($this->request->is('post')) {
			if ($this->Comic->save($this->request->data)) {
				$this->Session->setFlash('Your comic has been saved.');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Unable to add your post.');
			}
		}
	}

}