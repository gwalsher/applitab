<?php
class ProjectsController extends AppController 
{
public $helpers = array('Html', 'Form');

public function index() 
{
	$this->set('projects', $this->Project->find('all'));
}

public function view($id = null)
{
	if (!$id) 
	{
		throw new NotFoundException(__('Invalid project'));
	}
	$project = $this->Project->findById($id);

	if (!$project) 
	{
		throw new NotFoundException(__('Invalid project'));
	}
	$this->set('project', $project);
}
}
?>