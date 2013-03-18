<?php
/*
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Client
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
class ClientsController extends AppController {
	public $helpers = array('Html', 'Form');

public function index() {
	$this->set('clients', $this->Client->find('all'));
}

public function view($id = null) {
	if (!$id) {
		throw new NotFoundException(__('Invalid client'));
	}
	$client = $this->Client->findById($id);

	if (!$client) {
		throw new NotFoundException(__('Invalid client'));
	}
	$this->set('client', $client);
}

public function add() {
	if ($this->request->is('post')) {
	$this->Client->create();
		if ($this->Client->save($this->request->data)) {
			$this->Session->setFlash(__('The client has been saved'));
			$this->redirect(array('action' => 'index'));
		} else {
		$this->Session->setFlash(__('The client could not be saved. Please, try again.'));
		}
	}
}

public function delete($id) {
	if ($this->request->is('get')) {
		throw new MethodNotAllowedException();
	}
	if ($this->Client->delete($id)) {
		$this->Session->setFlash('The ' . $name . 'client has been deleted.');
		$this->redirect(array('action' => 'index'));
	}
}

public function edit($id = null) {
	if (!$id) {
		throw new NotFoundException(__('Invalid client'));
	}
	$client = $this->Client->findById($id);
	if (!$client) {
		throw new NotFoundException(__('Invalid client'));
	}
	if ($this->request->is('client') || $this->request->is('put')) {
		$this->Client->id = $id;
		if ($this->Client->save($this->request->data)) {
			$this->Session->setFlash('Your client has been updated.');
			$this->redirect(array('action' => 'index'));
		} else {
			$this->Session->setFlash('Unable to update your client.');
		}
	}
	if (!$this->request->data) {
		$this->request->data = $client;
	}
}


}
?>