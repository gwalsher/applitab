<!--
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
 */-->
<!-- File: /app/View/Clients/view.ctp -->
<h1><?php echo "Client: " . $client['Client']['name']; ?></h1>
<table class = "table table-bordered">
	<tr>
		<th>Representative</th>
		<th>Phone</th>
		<th>Email</th>
		<th>Address</th>
		<th>Manage</th>
	</tr>
	<tr>
		<td><?php echo $client['Client']['rep_name']; ?></td>
		<td><?php echo $client['Client']['phone']; ?></td>
		<td><?php echo $client['Client']['email']; ?></td>
		<td><?php echo $client['Client']['address']; ?></td>
		<td>
			<?php echo $this->Form->postLink(
			'Delete',
			array('action' => 'delete', $client['Client']['id']),
			array('confirm' => 'Are you sure?'));
			?>
			<?php echo $this->Html->link('Edit', array('action' => 'edit', $client['Client']['id'])); ?>
		</td>
	</tr>
</table>
