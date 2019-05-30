<?php
	$servername 		= "localhost";
	$serverusername 	= "root";
	$serveruserpassword = "";
	$databasename 		= "oes_db";

	$connection = 	mysqli_connect(
						$servername,
						$serverusername,
						$serveruserpassword,
						$databasename
					);
?>