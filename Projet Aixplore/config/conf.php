<?php
class Conf{

	static $debug = 1;

	static $database = array(

		'default' => array(
				'host'		=> 'localhost',
				'database' 	=> 'aixplore',
				'login'		=> 'root',
				'password'	=> ''
			),

	);

}


Router::connect('/layout/index', 'home');
