<?php 
 class Subcription extends Model {

 	var $validate = array(
		'name' => array(
			'rule' => 'notEmpty',
			'message' => 'Please complete the input "Name".'),
		'firstname' => array(
			'rule' => 'notEmpty',
			'message' => 'Please complete the input "FirstName".'),
		'email' => array(
			'rule' => 'notEmpty',
			'message' => 'Please complete the input "E-mail".')
	);

 } ?>