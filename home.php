<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css">
	<script src="./assets/js/bootstrap.min.js"></script>
	<script src="./assets/js/jquery.js"></script>
</head>
<body style="background-color: #e9e9e9;">
	

	<?php 

		SESSION_START();
			echo "Welcome so much ".$_SESSION['firstname']." ".$_SESSION['lastname'];

	 ?>

</body>
</html>