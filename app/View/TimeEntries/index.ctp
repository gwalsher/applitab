<!-- File: /app/View/TimeEntries/index.ctp -->
<h1>TimeEntries</h1>
<table>
<tr>
<th>TimeEntry</th>
<th>Phone</th>
<th>Representative</th>
</tr>
<!-- Here is where we loop through our $timeEntries array, printing out timeEntry info -->
<?php foreach ($timeEntries as $timeEntry): ?>
<tr>
<td>
<?php echo $this->Html->link($timeEntry['TimeEntry']['name'],
array('controller' => 'timeEntries', 'action' => 'view', $timeEntry['TimeEntry']['id'])); ?>
</td>
<td><?php echo $timeEntry['TimeEntry']['phone']; ?></td>
<td>
<?php echo $timeEntry['TimeEntry']['rep_name'];?>
</td>
</tr>
<?php endforeach; ?>
<?php unset($timeEntry); ?>
</table>