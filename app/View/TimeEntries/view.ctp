<!--
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) TimeEntry
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */-->
<!-- File: /app/View/TimeEntries/view.ctp -->
<?php //debug($project); ?>
<h1><?php echo "TimeEntry: " . $project['TimeEntry']['name']; ?></h1>
<table class = "table table-bordered">
	<tr>
		<th>Description</th>
		<th>Cost</th>
		<th>Client</th>
		<th>Manage</th>
	</tr>
	<tr>
		<td><?php echo $project['TimeEntry']['description']; ?></td>
		<td><?php echo $project['TimeEntry']['cost']; ?></td>
		<td><?php echo $project['Client']['name']; ?></td>
		<td>
			<?php echo $this->Form->postLink(
			'Delete',
			array('action' => 'delete', $project['TimeEntry']['id']),
			array('confirm' => 'Are you sure?'));
			?>
			<?php echo $this->Html->link('Edit', array('action' => 'edit', $project['TimeEntry']['id'])); ?>
		</td>
	</tr>
</table>