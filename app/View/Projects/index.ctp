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
<!-- File: /app/View/Projects/index.ctp -->
<?php //debug($project_list); ?>
<h1>Projects</h1>
<table class = "table table-bordered">
	<tr>
		<td colspan = "5">
			<a style="float:right" href = "projects/add"class = "btn btn-success">Add Project</a>
		</td>
	</tr>
	<tr>
		<th>Project name</th>
		<th>Description</th>
		<th>Cost</th>
		<th>Client</th>
		<th>Manage</th>
	</tr>
<!-- Here is where we loop through our $projects array, printing out project info -->
	<?php foreach ($projects as $project): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($project['Project']['name'],
			array('controller' => 'projects', 'action' => 'view', $project['Project']['id'])); ?>
		</td>
		<td>
			<?php echo $project['Project']['description'];?>
		</td>
		<td>
			<?php echo $project['Project']['cost'];?>
		</td>
		<td>
			<?php echo $project['Client']['name'];?>
		</td>
		<td>
			<?php echo $this->Form->postLink(
			'Delete',
			array('action' => 'delete', $project['Project']['id']),
			array('confirm' => 'Are you sure?'));
			?>
			<?php echo $this->Html->link('Edit', array('action' => 'edit', $project['Project']['id'])); ?>
		</td>
	</tr>
	<?php endforeach; ?>
	<?php unset($project); ?>
</table>