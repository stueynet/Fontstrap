<?php

// No direct access (you can inly include / require this file)
if(!defined('Access')){die('Direct access not permitted');}

// determine environment
$whitelist = array('localhost', '127.0.0.1');
if(in_array($_SERVER['HTTP_HOST'], $whitelist)){
   $localhost = true; 
}


// set up some globals
$site_name = 'Fontstrap';

if($localhost){
		
	$site_url = 'http://localhost/~stueynet/fontstrap';
	$dbhost = 'localhost';
	$dbname = 'fontstrap';
	$dbuser = 'root';
	$dbpass = 'root';
		
} else { 
	$site_url = 'http://fontstrap.com'; 
	$dbhost = 'localhost';
	$dbname = 'fontstrap';
	$dbuser = 'root';
	$dbpass = 'root';
}
