<!-- File: /app/View/TimeEntries/view.ctp -->
<h1><?php echo "Time Entry: " . h($timeEntry['TimeEntry']['name']); ?></h1>
<p><small>ID: <?php echo $timeEntry['TimeEntry']['id']; ?></small></p>
<p><?php echo h($timeEntry['TimeEntry']['phone']); ?></p>