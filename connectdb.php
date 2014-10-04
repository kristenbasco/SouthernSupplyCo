<?php
	//Personal Info
	$dbname ="ke571033";
	$dbusername = "ke571033";
	$dbpass = "Super55!";
	$dbhost = "sulley.cah.ucf.edu";

	//Connects to sulley mysqli
	$connection = mysqli_connect("$dbhost", "$dbusername", "$dbpass","$dbname");
	
	//Checks connection
	if (mysqli_connect_errno()) {
	    printf("Connect failed: %s\n", mysqli_connect_error());
	    exit();
	}
?>