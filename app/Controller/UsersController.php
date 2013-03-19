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
class UsersController extends AppController {
	public function beforeFilter() {
		parent::beforeFilter();
		//$this->Auth->allow('add');
	}
public function index() {
	$this->User->recursive = 0;
	$this->set('users', $this->paginate());
}
public function view($id = null) {
	$this->User->id = $id;
	if (!$this->User->exists()) {
		throw new NotFoundException(__('Invalid user'));
}
	$this->set('user', $this->User->read(null, $id));
}
public function add() {
	if ($this->request->is('post')) {
		$this->User->create();
	if ($this->User->save($this->request->data)) {
		$this->Session->setFlash(__('The user has been saved'));
		$this->redirect(array('action' => 'index'));
	} else {
		$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
	}
}
}
public function edit($id = null) {
	$this->User->id = $id;
	if (!$this->User->exists()) {
		throw new NotFoundException(__('Invalid user'));
	}
	if ($this->request->is('post') || $this->request->is('put')) {
		if ($this->User->save($this->request->data)) {
			$this->Session->setFlash(__('The user has been saved'));
			$this->redirect(array('action' => 'index'));
		} else {
			$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
		}
		} else {
			$this->request->data = $this->User->read(null, $id);
			unset($this->request->data['User']['password']);
		}
}
public function delete($id = null) {
	if (!$this->request->is('post')) {
		throw new MethodNotAllowedException();
	}
	$this->User->id = $id;
	if (!$this->User->exists()) {
		throw new NotFoundException(__('Invalid user'));
	}
	if ($this->User->delete()) {
		$this->Session->setFlash(__('User deleted'));
		$this->redirect(array('action' => 'index'));
	}
		$this->Session->setFlash(__('User was not deleted'));
		$this->redirect(array('action' => 'index'));
}
public function login() {
	if ($this->request->is('post')) {
		if ($this->Auth->login()) {
			$this->redirect($this->Auth->redirect());
		} else {
			$this->Session->setFlash(__('Invalid username or password, try again'));
		}
}
}
public function logout() {
	$this->redirect($this->Auth->logout());
}
}
?>