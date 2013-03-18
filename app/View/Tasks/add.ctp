<!--
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Task
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */-->
<!-- app/View/Tasks/add.ctp -->
<div class="tasks form">
<?php echo $this->Form->create('Task'); ?>
<fieldset>
<legend><?php echo __('Add Task'); ?></legend>
<?php echo $this->Form->input('name');
echo $this->Form->input('description', array('rows' => 3));
echo $this->Form->input('cost');
echo $this->Form->input('project_id');
?>
</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>