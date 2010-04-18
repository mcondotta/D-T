<?php
class DATABASE_CONFIG {

	var $development = array(
		'driver' => 'mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'det',
		'password' => 'detdbpass',
		'database' => 'detdb_dev',
	);
	var $production = array(
		'driver' => 'mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'det',
		'password' => 'detdbpass',
		'database' => 'detdb',
	);
	var $test = array(
		'driver' => 'mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'det',
		'password' => 'detdbpass',
		'database' => 'test',
	);
	var $default = array(); 

	function __construct() 
	{ 
		$this->default = ($_SERVER['SERVER_ADDR'] == '127.0.0.1') ? 
				$this->development : $this->production; 
	} 
	function DATABASE_CONFIG() 
	{ 
		$this->__construct(); 
	} 
}
?>
