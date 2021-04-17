<?php 
 	ini_set("display_errors", "1");
 	error_reporting(E_ALL);

	session_start();
	$host = 'localhost';
	$user = 'root';
	$password = '';
	$dbname = 'ealert';

	$conn = mysqli_connect($host, $user, $password, $dbname);
?>