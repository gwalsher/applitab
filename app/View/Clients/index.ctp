<!-- File: /app/View/Clients/index.ctp -->
<h1>Clients</h1>
<table>
<tr>
<th>Id</th>
<th>Title</th>
<th>Description</th>
</tr>
<!-- Here is where we loop through our $clients array, printing out client info -->
<?php foreach ($clients as $client): ?>
<tr>
<td><?php echo $client['Client']['id']; ?></td>
<td>
<?php echo $this->Html->link($client['Client']['client_name'],
array('controller' => 'clients', 'action' => 'view', $client['Client']['id'])); ?>
</td>
<td>
<?php echo $client['Client']['description'];?>
</td>
</tr>
<?php endforeach; ?>
<?php unset($client); ?>
</table>