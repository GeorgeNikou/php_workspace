<?php
session_start();
include "dbConnection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/form.css">

</head>
<body><br><br>
	<div class="container p-0 shadow rounded" style="width: 700px; height: 800px; border: 1px solid lightgray;">
		<form action="core.php" method="POST" enctype="multipart/form-data">
			<div class="container">
				<h1 class="text-center">Register</h1>
				<p class="text-center">Please fill in this form to create an account.</p>
				<hr>

				<label for="text"><b>Username</b></label>
				<input type="text" placeholder="Enter username" name="username" required><br>

				<label for="email"><b>Email</b></label>
				<input type="email" placeholder="Enter email" name="email" required>

				<label for="psw"><b>Password</b></label>
				<input id="pass" type="password" placeholder="Enter Password" name="password" required>

				<label for="psw-repeat"><b>Confirm Password</b></label>
				<input id="confirmPass" type="password" placeholder="Repeat Password" name="confirmpassword" required>
				<hr>
				<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

				<button type="submit" class="registerbtn" name="register">Register</button>
				<input type="file" name="fileToUpload" id="fileToUpload">

			</div>

			<div class="container signin">
				<p>Already have an account? <a href="index.php">Sign in</a>.</p>
			</div>
		</form>
	</div>


	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<script>

		$(document).ready(function() {

			/*var password = $("input[name='password']").val();
			var confirm_password = $("input[name='confirmpassword']").val();

			if(password != "" && confirm_password != ""){
				document.write(password);
				print(password);
			}
		});*/

	</script>

</body>
</html>
