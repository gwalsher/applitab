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
class Client extends AppModel {	

	public $hasMany = array(
		'Project' => array(
			'className' => 'Project'
			)
		);
	
	public $validate = array(
	'name' => array(
		'required' => array(
			'rule' => array('notEmpty'),
			'message' => 'A name is required'
		)
	),
	'rep_name' => array(
		'required' => array(
			'rule' => array('notEmpty'),
			'message' => 'Client representative name is required'
		)
	),
	'phone' => array(
		'required' => array(
			'rule' => array('notEmpty'),
			'message' => 'A phone number is required'
		)
	),
	'email' => array(
		'required' => array(
			'rule' => array('notEmpty'),
			'message' => 'An email address is required'
		)
	),
	'address' => array(
		'required' => array(
			'rule' => array('notEmpty'),
			'message' => 'An address is required'
		)
	),
);

}
?>