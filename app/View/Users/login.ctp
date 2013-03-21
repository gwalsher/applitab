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
<!--file app/Views/Users/login.ctp-->
<div class="users form">
<?php $this->layout = 'signin'; ?>
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
<fieldset>
<legend><?php echo __('Please enter your username and password'); ?></legend>
<?php echo $this->Form->input('username');
echo $this->Form->input('password');
?>
</fieldset>
<?php echo $this->Form->end(__('Login')); ?>
</div>