<?php 
class Contact extends Model
{
	var $validate = array(
		'name' => array(
			'rule' => 'notEmpty',
			'message' => 'Please complete the input "Name".'),
		'firstname' => array(
			'rule' => 'notEmpty',
			'message' => 'Please complete the input "FirstName".'),
		'email' => array(
			'rule' => 'notEmpty',
			'message' => 'Please complete the input "E-mail".'),
		'subject' => array(
			'rule' => 'notEmpty',
			'message' => 'Please complete the input "Subject".'),
		'message' => array(
			'rule' => 'notEmpty',
			'message' => 'Please complete the input "Message".')
	);

}