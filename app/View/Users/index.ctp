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
<!-- File: /app/View/Users/index.ctp -->
<h1>Users</h1>
<table class = "table table-bordered">
	<tr>
		<td colspan = "4">
			<a style="float:right" href = "users/add"class = "btn btn-success">Add User</a>
		</td>
	</tr>
	<tr>
		<th>Username</th>
		<th>Role</th>
		<th>Hourly wage</th>
		<th>Manage</th>
	</tr>
<!-- Here is where we loop through our $users array, printing out user info -->
	<?php foreach ($users as $user): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($user['User']['name'],
			array('controller' => 'users', 'action' => 'view', $user['User']['id'])); ?>
		</td>
		<td>
			<?php echo $user['User']['role']; ?>
		</td>
		<td>
			<?php echo $user['User']['hourly_wage'];?>
		</td>
		<td>
			<?php echo $this->Form->postLink(
			'Delete',
			array('action' => 'delete', $user['User']['id']),
			array('confirm' => 'Are you sure?'));
			?>
			<?php echo $this->Html->link('Edit', array('action' => 'edit', $user['User']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
<?php unset($user); ?>
</table>