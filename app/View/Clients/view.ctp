<!-- File: /app/View/Clients/view.ctp -->
<h1><?php echo "Client: " . h($client['Client']['name']); ?></h1>
<p><small>ID: <?php echo $client['Client']['id']; ?></small></p>
<p><?php echo h($client['Client']['phone']); ?></p>