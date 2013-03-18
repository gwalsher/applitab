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
<!-- File: /app/View/Users/edit.ctp -->
<h1>Edit User</h1>
<?php
echo $this->Form->create('User');
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->input('name');
echo $this->Form->input('email');
echo $this->Form->input('username');
echo $this->Form->input('password');
echo $this->Form->input('role', array(
'options' => array('admin' => 'Admin', 'employee' => 'Employee')
));
echo $this->Form->input('hourly_wage');
echo $this->Form->end('Save User');
?>

