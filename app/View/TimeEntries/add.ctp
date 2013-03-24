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
<!-- app/View/TimeEntries/add.ctp -->
<div class="timeEntries form">
<?php echo $this->Form->create('TimeEntry'); ?>
<fieldset>
<legend><?php echo __('Add Time Entry'); ?></legend>
<?php 
echo $this->Form->input('task_id');
echo $this->Form->input('hours');
echo $this->Form->input('description', array('rows' => 3));
echo $this->Form->input('entry_cost');
echo $this->Form->input('user_id');
?>
</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>