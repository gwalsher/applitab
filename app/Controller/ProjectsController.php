<?php
/*
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
class ProjectsController extends AppController {
public $helpers = array('Html', 'Form');

public function index() {
	$this->set('projects', $this->Project->find('all'));
}

public function view($id = null) {
	if (!$id) {
		throw new NotFoundException(__('Invalid project'));
	}
	$project = $this->Project->findById($id);

	if (!$project) {
		throw new NotFoundException(__('Invalid project'));
	}
	$this->set('project', $project);
}

public function add() {
	if ($this->request->is('add')) {
	$this->Project->create();
		if ($this->Project->save($this->request->data)) {
			$this->Session->setFlash(__('The project has been saved'));
			$this->redirect(array('action' => 'index'));
		} else {
		$this->Session->setFlash(__('The project could not be saved. Please, try again.'));
		}
	}
}

public function delete($id) {
	if ($this->request->is('get')) {
		throw new MethodNotAllowedException();
	}
	if ($this->Project->delete($id)) {
		$this->Session->setFlash('The ' . $name . 'project has been deleted.');
		$this->redirect(array('action' => 'index'));
	}
}

public function edit($id = null) {
	if (!$id) {
		throw new NotFoundException(__('Invalid project'));
	}
	$project = $this->Project->findById($id);
	if (!$project) {
		throw new NotFoundException(__('Invalid project'));
	}
	if ($this->request->is('project') || $this->request->is('put')) {
		$this->Project->id = $id;
		if ($this->Project->save($this->request->data)) {
			$this->Session->setFlash('Your project has been updated.');
			$this->redirect(array('action' => 'index'));
		} else {
			$this->Session->setFlash('Unable to update your project.');
		}
	}
	if (!$this->request->data) {
		$this->request->data = $project;
	}
}
}
?>