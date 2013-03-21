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
<!-- File: /app/View/Tasks/view.ctp -->
<h1><?php echo "Task: " . $task['Task']['name']; ?></h1>
<table class = "table table-bordered">
	<tr>
		<th>Description</th>
		<th>Status</th>
		<th>Cost</th>
		<th>Manage</th>
	</tr>
	<tr>
		<td><?php echo $task['Task']['description']; ?></td>
		<td><?php echo $task['Task']['status']; ?></td>
		<td><?php echo $task['Task']['task_cost']; ?></td>
		<td>
			<?php echo $this->Form->postLink(
			'Delete',
			array('action' => 'delete', $task['Task']['id']),
			array('confirm' => 'Are you sure?'));
			?>
			<?php echo $this->Html->link('Edit', array('action' => 'edit', $task['Task']['id'])); ?>
		</td>
	</tr>