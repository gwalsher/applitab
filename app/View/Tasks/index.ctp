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
<!-- File: /app/View/Tasks/index.ctp -->
<h1>Tasks</h1>
<table class = "table table-bordered">
	<tr>
		<td colspan = "5">
			<a style = "float:right" href = "tasks/add"class = "btn btn-success">Add Task</a>
		</td>
	</tr>
	<tr>
		<th>Task name</th>
		<th>Description</th>
		<th>Status</th>
		<th>Manage</th>
	</tr>
<!-- Here is where we loop through our $tasks array, printing out task info -->
	<?php foreach ($tasks as $task): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($task['Task']['name'],
			array('controller' => 'tasks', 'action' => 'view', $task['Task']['id'])); ?>
		</td>
		<td>
			<?php echo $task['Task']['description'];?>
		</td>
		<td>
			<?php echo $task['Task']['status'];?>
		</td>
		<td>
		<?php echo $this->Form->postLink(
			'Delete',
		array('action' => 'delete', $task['Task']['id']),
		array('confirm' => 'Are you sure?'));
		?>
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $task['Task']['id'])); ?>
		</td>
	</tr>
	<?php endforeach; ?>
	<?php unset($task); ?>
</table>