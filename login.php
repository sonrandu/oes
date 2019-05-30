<!DOCTYPE html>
<html lang="en">
<head>
 	<title>Login</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css">
	<script src="./assets/js/bootstrap.min.js"></script>
	<script src="./assets/js/jquery.js"></script>
</head>
<body style="background-color: #e9e9e9;">
	<table align="center" width="400" cellpadding="20" style="margin-top: 10%; border-radius: 5px; background-color: white; ">
		<tr><td></td></tr>
		<tr><td>
		<div><h2 align="center">Log In to OES</h2><hr></div>
		<form action="./connectionaction/loginaction.php" method="POST" class="needs-validation" novalidate>
		  	<div class="form-group">
			    <label for="uname">Registration Number:</label>
			    <input type="text" class="form-control" id="uname" placeholder="Enter Registration Number" name="regnumber" required>
			    <div class="valid-feedback">Valid.</div>
			    <div class="invalid-feedback">Please fill out this field.</div>
		  	</div>
		  	<div class="form-group">
			    <label for="pwd">Password:</label>
			    <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="password" required>
			    <div class="valid-feedback">Valid.</div>
			    <div class="invalid-feedback">Please fill out this field.</div>
		  	</div>
		  	<button type="submit" class="btn btn-primary btn-block">Log In</button>
		</form>
		</td></tr>
		<tr><td><a href="#">Forgot Password</a><a href="register.php" style="float: right;">Not Registered</a></td></tr>
	</table>

	<script>
		// Disable form submissions if there are invalid fields
		(function() {
		  	'use strict';
		  	window.addEventListener('load', function() {
		    // Get the forms we want to add validation styles to
		    	var forms = document.getElementsByClassName('needs-validation');
		    	// Loop over them and prevent submission
		   		var validation = Array.prototype.filter.call(forms, function(form) {
		      		form.addEventListener('submit', function(event) {
			        	if (form.checkValidity() === false) {
			          		event.preventDefault();
			          		event.stopPropagation();
			        	}
					form.classList.add('was-validated');
					}, false);
				});
			}, false);
		})();
	</script>
</body>
</html>