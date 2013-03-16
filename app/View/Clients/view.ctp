<!-- File: /app/View/Clients/view.ctp -->
<h1><?php echo h($client['Client']['client_name']); ?></h1>
<p><small>ID: <?php echo $client['Client']['id']; ?></small></p>
<p><?php echo h($client['Client']['description']); ?></p>