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
class TasksController extends AppController {
public $helpers = array('Html', 'Form');

public function index() {
	$this->set('tasks', $this->Task->find('all'));
}

public function view($id = null) {
	if (!$id) {
		throw new NotFoundException(__('Invalid task'));
	}
	$task = $this->Task->findById($id);

	if (!$task) {
		throw new NotFoundException(__('Invalid task'));
	}
	$this->set('task', $task);
}
public function add() {
	if ($this->request->is('post')) {
	$this->Task->create();
		if ($this->Task->save($this->request->data)) {
			$this->Session->setFlash(__('The task has been saved'));
			$this->redirect(array('controller' => 'projects', 'action' => 'view', $task['Project']['id']));
	} else {
		$this->Session->setFlash(__('The task could not be saved. Please, try again.'));
		}
	}
	$this->set('projects', $this->Task->Project->find('list'));
}

public function delete($id) {
	if ($this->request->is('get')) {
		throw new MethodNotAllowedException();
	}
	$task = $this->Task->findById($id);
	if ($this->Task->delete($id)) {
		$this->Session->setFlash('The ' . $name . 'task has been deleted.');
		$this->redirect(array('controller' => 'projects', 'action' => 'view', $task['Project']['id']));
	}
}

public function edit($id = null) {
	if (!$id) {
		throw new NotFoundException(__('Invalid task'));
	}
	$task = $this->Task->findById($id);
	if (!$task) {
		throw new NotFoundException(__('Invalid task'));
	}
	if ($this->request->is('task') || $this->request->is('put')) {
		$this->Task->id = $id;
		if ($this->Task->save($this->request->data)) {
			$this->Session->setFlash('Your task has been updated.');
			$this->redirect(array('action' => 'index'));
		} else {
			$this->Session->setFlash('Unable to update your task.');
		}
	}
	if (!$this->request->data) {
		$this->request->data = $task;
	}
}

}
?>