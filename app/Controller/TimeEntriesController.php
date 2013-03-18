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
class TimeEntriesController extends AppController {
public $helpers = array('Html', 'Form');

public function index() {
	$this->set('timeEntries', $this->TimeEntry->find('all'));
}

public function view($id = null) {
	if (!$id) {
		throw new NotFoundException(__('Invalid time entry'));
	}
	$timeEntry = $this->TimeEntry->findById($id);

	if (!$timeEntry) {
		throw new NotFoundException(__('Invalid time entry'));
	}
	$this->set('timeEntry', $timeEntry);
}
public function add() {
	if ($this->request->is('post')) {
	$this->Project->create();
		if ($this->Project->save($this->request->data)) {
			$this->Session->setFlash(__('The time entry has been saved'));
			$this->redirect(array('action' => 'index'));
	} else {
		$this->Session->setFlash(__('The time entry could not be saved. Please, try again.'));
}
}
}
}
?>