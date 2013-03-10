<!-- File: /app/View/Projects/index.ctp -->
<h1>Projects</h1>
<table>
<tr>
<th>Id</th>
<th>Title</th>
<th>Description</th>
</tr>
<!-- Here is where we loop through our $projects array, printing out project info -->
<?php foreach ($projects as $project): ?>
<tr>
<td><?php echo $project['Project']['id']; ?></td>
<td>
<?php echo $this->Html->link($project['Project']['project_name'],
array('controller' => 'projects', 'action' => 'view', $project['Project']['id'])); ?>
</td>
<td>
<?php echo $project['Project']['description'];?>
</td>
</tr>
<?php endforeach; ?>
<?php unset($project); ?>
</table>