<!--
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
 */-->
<!-- File: /app/View/Projects/view.ctp -->
<?php //debug($project); ?>
<h1><?php echo "Project: " . $project['Project']['name']; ?></h1>
<table class = "table table-bordered">
	<tr>
		<th>Description</th>
		<th>Cost</th>
		<th>Client</th>
		<th>Manage</th>
	</tr>
	<tr>
		<td><?php echo $project['Project']['description']; ?></td>
		<td><?php echo $project['Project']['cost']; ?></td>
		<td><?php echo $project['Client']['name']; ?></td>
		<td>
			<?php echo $this->Form->postLink(
			'Delete',
			array('action' => 'delete', $project['Project']['id']),
			array('confirm' => 'Are you sure?'));
			?>
			<?php echo $this->Html->link('Edit', array('action' => 'edit', $project['Project']['id'])); ?>
		</td>
	</tr>
</table>
<h2>Tasks</h2>
<?php if(empty($project['Task'])): ?>
	<p>There are no tasks for this project yet</p>
<?php else: ?>
<table class = "table table-bordered">
	<tr>
		<th>Task name</th>
		<th>Description</th>
		<th>Status</th>
		<th>Manage</th>
	</tr>
<!-- Here is where we loop through our $projects array, printing out task info -->
	<?php foreach ($project['Task'] as $task): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($task['name'],
			array('controller' => 'tasks', 'action' => 'view', $task['id'])); ?>
		</td>
		<td>
			<?php echo $task['description'];?>
		</td>
		<td>
			<?php echo $task['status'];?>
		</td>
		<td>
		<?php echo $this->Form->postLink(
			'Delete',
		array('controller' => 'tasks', 'action' => 'delete', $task['id']),
		array('confirm' => 'Are you sure?'));
		?>
		<?php echo $this->Html->link('Edit', array('controller' => 'tasks', 'action' => 'edit', $task['id'])); ?>
		</td>
	</tr>
	<?php endforeach; ?>
</table>
<?php endif; ?>
<?php echo $this->Html->link('Add Task', array('controller' => 'tasks', 'action' => 'add', $project['Project']['id']), array('class' => 'btn btn-success')); ?>