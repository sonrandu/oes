<?php
	include('./connection.php');

	if($_POST['pswd'] != $_POST['repswd']){

		echo "Confirm Password did not match with the password...<br>";
		echo "Please <a href=\"../register.php\">register again.</a>";

	} else {

		$querytocheck = "SELECT regnumber FROM users WHERE regnumber='".$_POST['regnumber']."'";

		if(mysqli_num_rows(mysqli_query($connection, $querytocheck)) >= 1){

			echo "The user with the same registration is available...<br>";
			echo "Please <a href=\"../register.php\">register again.</a>";

		} else {

			$firstname  = $_POST['fname'];
			$lastname   = $_POST['lname'];
			$middlename = $_POST['mname'];
			$category   = $_POST['category'];
			$regnumber  = $_POST['regnumber'];
			$email 	  	= $_POST['email'];
			$password 	= $_POST['pswd'];

			$querytoinsert = "INSERT INTO users (lastname,firstname,middlename,category,regnumber,email,password) 
					 		  VALUES ('".$lastname."','".$firstname."','".$middlename."','".$category."','".$regnumber."','".$email."','".$password."')";

			if(mysqli_query($connection, $querytoinsert)){

				session_start();
					$_SESSION['login'] 	   = TRUE;
					$_SESSION['firstname'] = $_POST['fname'];
				header('Location: ../home.php'); exit();

			} else {

				echo "Failure";

			}
		}
	}
	
?>