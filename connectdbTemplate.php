<?php
	//Personal Info

	$dbname ="DBNAME";
	$dbusername = "USERNAME";
	$dbpass = "PASS!";
	$dbhost = "sulley.cah.ucf.edu";

	//Connects to sulley mysqli
	$connection = mysqli_connect("$dbhost", "$dbusername", "$dbpass","$dbname");
	
	//Checks connection
	if (mysqli_connect_errno()) {
	    printf("Connect failed: %s\n", mysqli_connect_error());
	    exit();
	}
?>