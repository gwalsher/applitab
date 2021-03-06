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
<!-- File: /app/View/Clients/index.ctp -->
<h1>Clients</h1>
<table class = "table table-bordered">
	<tr>
		<td colspan = "4">
			<a style="float:right" href = "clients/add"class = "btn btn-success">Add Client</a>
		</td>
	</tr>
	<tr>
		<th>Client name</th>
		<th>Phone</th>
		<th>Representative</th>
		<th>Manage</th>
	</tr>
<!-- Here is where we loop through our $clients array, printing out client info -->
	<?php foreach ($clients as $client): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($client['Client']['name'],
			array('controller' => 'clients', 'action' => 'view', $client['Client']['id'])); ?>
		</td>
		<td>
			<?php echo $client['Client']['phone']; ?>
		</td>
		<td>
			<?php echo $client['Client']['rep_name'];?>
		</td>
		<td>
			<?php echo $this->Form->postLink(
			'Delete',
			array('action' => 'delete', $client['Client']['id']),
			array('confirm' => 'Are you sure?'));
			?>
			<?php echo $this->Html->link('Edit', array('action' => 'edit', $client['Client']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
<?php unset($client); ?>
</table>