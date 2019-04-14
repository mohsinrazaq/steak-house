<?php
	$server = 'localhost';
	$db_user = 'root';
	$db_pass = '' ; 
	$db = 'steak-house';
	$con = mysqli_connect($server,$db_user,$db_pass,$db);
	session_start();
?>