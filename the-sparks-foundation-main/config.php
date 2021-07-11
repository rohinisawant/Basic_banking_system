<?php

	$Server_Name="localhost";
	$User_Name="root";
	$pwd="";
	$DB_Name="sparks_bank";
	
	$conn = mysqli_connect($Server_Name, $User_Name,$pwd,$DB_Name);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>