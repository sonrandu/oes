<?php 
	include('./connection.php');

	$querytocheckregnumber = "SELECT regnumber
					 		  FROM 	 users
					 		  WHERE  regnumber = '".$_POST['regnumber']."'
						";
	$querytocheckpassword  = "SELECT password
							  FROM 	 users
					 		  WHERE  password  = '".$_POST['password']."'
						";

	if(mysqli_query($connection, $querytocheckregnumber) && mysqli_query($connection, $querytocheckpassword)){
		$querytoselect = "SELECT firstname,regnumber,lastname
						 		  FROM 	 users 
						 		  WHERE  regnumber = '".$_POST['regnumber']."'
							";
		$queryexecute = mysqli_query($connection, $querytoselect);

		if(mysqli_num_rows($queryexecute) == 1){
			session_start();
				$results = mysqli_fetch_assoc($queryexecute);
				$_SESSION['login'] = TRUE;
				$_SESSION['lastname']  = $results['lastname'];
				$_SESSION['firstname'] = $results['firstname'];
				
			header('Location: ../home.php'); exit();
		} else {
			echo "Failure";
		}
	} else {
		session_start();
			$_SESSION['loginfailurealert'] = "Username or Password is incorrect.";
			header('Location: ../home.php'); exit();
		session_end();
	}
?>