<!DOCTYPE html>
<html lang="en">
<head>
 	<title>Register</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css">
	<script src="./assets/js/bootstrap.min.js"></script>
	<script src="./assets/js/jquery.js"></script>
</head>
<body style="background-color: #e9e9e9;">
	<table align="center" width="600" cellpadding="20" style="margin-top: 3%; border-radius: 5px; background-color: white; ">
		<tr><td>
		<div><h2 align="center">Register to OES</h2><hr></div>
		<form action="./connectionaction/registeraction.php" method="POST" class="needs-validation" novalidate>
		  	<div class="form-group">
			    <label for="lname">Lastname:</label>
			    <input type="text" class="form-control" id="uname" placeholder="Enter Lastname" name="lname" required>
			    <div class="valid-feedback">Valid.</div>
			    <div class="invalid-feedback">Please fill out this field.</div>
		  	</div>
		  	<div class="form-group">
			    <label for="fname">Firstname:</label>
			    <input type="text" class="form-control" id="uname" placeholder="Enter Firstname" name="fname" required>
			    <div class="valid-feedback">Valid.</div>
			    <div class="invalid-feedback">Please fill out this field.</div>
		  	</div>
		  	<div class="form-group">
			    <label for="mname">Middlename:</label>
			    <input type="text" class="form-control" id="uname" placeholder="Enter Middlename" name="mname" required>
			    <div class="valid-feedback">Valid.</div>
			    <div class="invalid-feedback">Please fill out this field.</div>
		  	</div>

		  	<div class="form-group">
			    <label for="category">Category: </label>
			    <div class="custom-control custom-radio custom-control-inline">
				    <input type="radio" class="custom-control-input" id="staff" name="category" value="staff" required>
				    <label class="custom-control-label" for="staff">Staff</label>
			   	</div>
			   	<div class="custom-control custom-radio custom-control-inline">
				    <input type="radio" class="custom-control-input" id="student" name="category" value="student" required>
				    <label class="custom-control-label" for="student">Student</label>
				</div> 
		  	</div>
		  	<div class="form-group">
			    <label for="uname">Email:</label>
				<input type="email" class="form-control" placeholder="Enter Email" id="email" name="email" required="">
				<div class="valid-feedback">Valid.</div>
			    <div class="invalid-feedback">Please fill out this field.</div>
				</div>
		  	</div>
		  	<div class="form-group">
			    <label for="uname">Registration Number:</label>
			    <input type="text" class="form-control" id="regnumber" placeholder="Enter Registration Number" name="regnumber" required>
			    <div class="valid-feedback">Valid.</div>
			    <div class="invalid-feedback">Please fill out this field.</div>
		  	</div>
		   	<div class="form-group">
			    <label for="pwd">Password:</label>
			    <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="pswd" required>
			    <div class="valid-feedback">Valid.</div>
			    <div class="invalid-feedback">Please fill out this field.</div>
		  	</div>
		  		<div class="form-group">
			    <label for="repwd">Confirm Password:</label>
			    <input type="password" class="form-control" id="pwd" placeholder="Enter Confirm Password" name="repswd" required>
			    <div class="valid-feedback">Valid.</div>
			    <div class="invalid-feedback">Please fill out this field.</div>
		  	</div>
		  	<button type="submit" class="btn btn-primary btn-block" name="register">Register</button>
		</form>
		</td></tr>
		<tr><td><a href="login.php" style="float: right;">Already Register</a></td></tr>
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