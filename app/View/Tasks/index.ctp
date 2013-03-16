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
<table>
<tr>
<th>Id</th>
<th>Title</th>
<th>Description</th>
</tr>
<!-- Here is where we loop through our $tasks array, printing out task info -->
<?php foreach ($tasks as $task): ?>
<tr>
<td><?php echo $task['Task']['id']; ?></td>
<td>
<?php echo $this->Html->link($task['Task']['task_name'],
array('controller' => 'tasks', 'action' => 'view', $task['Task']['id'])); ?>
</td>
<td>
<?php echo $task['Task']['description'];?>
</td>
</tr>
<?php endforeach; ?>
<?php unset($task); ?>
</table>