<?php
/*
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
 */
App::uses('AuthComponent', 'Controller/Component');
class User extends AppModel {
	
public $validate = array(
	'username' => array(
		'required' => array(
			'rule' => array('notEmpty'),
			'message' => 'A username is required'
		)
	),
	'password' => array(
		'required' => array(
			'rule' => array('notEmpty'),
			'message' => 'A password is required'
		)
	),
	'role' => array(
		'valid' => array(
			'rule' => array('inList', array('admin', 'employee')),
			'message' => 'Please enter a valid role',
			'allowEmpty' => false
		)
	)
);
public function beforeSave($options = array()) {
	if (isset($this->data[$this->alias]['password'])) {
		$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
	}
	return true;
}

}
?>