<?php 
 class User extends Model {
 	
 	var $validate = array(
		'name' => array(
			'rule' => 'notEmpty',
			'message' => 'Please complete the input "Name".'),
		'pseudo' => array(
			'rule' => 'notEmpty',
			'message' => 'Please complete the input "FirstName".'),
		'email' => array(
			'rule' => 'notEmpty',
			'message' => 'Please complete the input "E-mail".')
	);
 	
 	
 } ?>