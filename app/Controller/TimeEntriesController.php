 <?php
/*
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) TimeEntry
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
class TimeEntriesController extends AppController {
public $helpers = array('Html', 'Form');

public function view($id = null) {
	if (!$id) {
		throw new NotFoundException(__('Invalid time entry'));
	}
	$this->TimeEntry->contain(array('Project', 'Task', 'User'));
	$timeEntry = $this->TimeEntry->findById($id);

	if (!$timeEntry) {
		throw new NotFoundException(__('Invalid time entry'));
	}
	$this->set('timeEntry', $timeEntry);
}
public function add() {
	if ($this->request->is('post')) {
	$this->TimeEntry->create();
		if ($this->TimeEntry->save($this->request->data)) {
			$this->Session->setFlash(__('The time entry has been saved'));
			$this->redirect(array('controller' => 'tasks', 'action' => 'view', $id));
	} else {
		$this->Session->setFlash(__('The time entry could not be saved. Please, try again.'));
		}
	}
	$this->set('tasks', $this->TimeEntry->Task->find('list'));
	//$this->set('users', $this->TimeEntry->User->find('list'));
}

public function delete($id) {
	if ($this->request->is('get')) {
		throw new MethodNotAllowedException();
	}
	$timeEntry = $this->TimeEntry->findById($id);
	if ($this->TimeEntry->delete($id, true)) {
		$this->Session->setFlash('The ' . $id . 'time entry has been deleted.');
		$this->redirect(array('controller' => 'tasks', 'action' => 'view', $timeEntry['Task']['id']));
	}
}

public function edit($id = null) {
	if (!$id) {
		throw new NotFoundException(__('Invalid time entry'));
	}
	$timeEntry = $this->TimeEntry->findById($id);
	if (!$timeEntry) {
		throw new NotFoundException(__('Invalid time entry'));
	}
	if ($this->request->is('timeEntry') || $this->request->is('put')) {
		$this->TimeEntry->id = $id;
		if ($this->TimeEntry->save($this->request->data)) {
			$this->Session->setFlash('Your time entry has been updated.');
			$this->redirect(array('controller' => 'timeEntries', 'action' => 'view', $id));
		} else {
			$this->Session->setFlash('Unable to update your project.');
		}
	}
	if (!$this->request->data) {
		$this->request->data = $timeEntry;
	}
}

}
?>