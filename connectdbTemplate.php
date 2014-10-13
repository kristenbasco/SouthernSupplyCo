<?php
	//Personal Info
	$dbname ="ssc";
	$dbusername = "jeremy_dev";
	$dbpass = "password";
	$dbhost = "localhost";

	//Connects to sulley mysqli
	$connection = mysqli_connect("$dbhost", "$dbusername", "$dbpass","$dbname");
	
	//Checks connection
	if (mysqli_connect_errno()) {
	    printf("Connect failed: %s\n", mysqli_connect_error());
	    exit();
	}
?>