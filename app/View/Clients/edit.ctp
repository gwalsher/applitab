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
<!-- File: /app/View/Clients/edit.ctp -->
<h1>Edit Client</h1>
<?php
echo $this->Form->create('Client');
echo $this->Form->input('name');
echo $this->Form->input('rep_name');
echo $this->Form->input('phone');
echo $this->Form->input('email');
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Save Client');
?>