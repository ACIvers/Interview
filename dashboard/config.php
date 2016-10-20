<?php
	$host ="localhost";
	$user="root";
	$pass="";
	$db="aci";
	
$con = mysqli_connect($host,$user,$pass,$db);

	if (mysqli_connect_errno())
	{
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

?>