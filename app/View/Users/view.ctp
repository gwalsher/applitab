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
<!-- File: /app/View/Users/view.ctp -->
<h1><?php echo "User: " . $user['User']['name']; ?></h1>
<table class = "table table-bordered">
	<tr>
		<th>Username</th>
		<th>Email</th>
		<th>Role</th>
		<th>Hourly wage</th>
		<th>Manage</th>
	</tr>
	<tr>
		<td><?php echo $user['User']['username']; ?></td>
		<td><?php echo $user['User']['email']; ?></td>
		<td><?php echo $user['User']['role']; ?></td>
		<td><?php echo $user['User']['hourly_wage']; ?></td>
		<td>
			<?php echo $this->Form->postLink(
			'Delete',
			array('action' => 'delete', $user['User']['id']),
			array('confirm' => 'Are you sure?'));
			?>
			<?php echo $this->Html->link('Edit', array('action' => 'edit', $user['User']['id'])); ?>
		</td>
	</tr>
</table>
