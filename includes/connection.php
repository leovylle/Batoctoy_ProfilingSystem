<?php
	//////////Establishing Database connection
	$server = "localhost";
	$username = "root";
	$password = "";
	$dbname = "bt_dbms";
	
	$connection = mysqli_connect($server, $username, $password, $dbname);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>