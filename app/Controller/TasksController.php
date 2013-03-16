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
class TasksController extends AppController 
{
public $helpers = array('Html', 'Form');

public function index() 
{
	$this->set('tasks', $this->Task->find('all'));
}

public function view($id = null)
{
	if (!$id) 
	{
		throw new NotFoundException(__('Invalid task'));
	}
	$task = $this->Task->findById($id);

	if (!$task) 
	{
		throw new NotFoundException(__('Invalid task'));
	}
	$this->set('task', $task);
}
}
?>