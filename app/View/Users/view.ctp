<!--file: /app/Views/User/view.ctp-->
<div class="users form">
<?php echo $this->Form->create('User'); ?>
<fieldset>
<legend><?php echo __('Users In System'); ?></legend>
<?php echo $this->Form->input('username');
echo $this->Form->input('password');
echo $this->Form->input('role', array(
'options' => array('admin' => 'Admin', 'employee' => 'Employee')
));
?>
</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>	