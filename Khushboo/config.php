<?php

	$servername = "localhost:4306";
	$username = "root";
	$password = "";
	$dbname = "sparks_bank";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>