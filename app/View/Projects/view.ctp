<!-- File: /app/View/Projects/view.ctp -->
<h1><?php echo h($project['Project']['name']); ?></h1>
<p><small>ID: <?php echo $project['Project']['id']; ?></small></p>
<p><?php echo h($project['Project']['description']); ?></p>