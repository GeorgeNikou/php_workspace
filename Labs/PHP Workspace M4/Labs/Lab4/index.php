<?php
include "core.php";
$query 	= $db->query("SELECT * FROM users");
$users 	= $query->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Page Title</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<!-- ColorBox CSS -->
	<link rel="stylesheet" href="css/colorbox.css">

</head>
<body><br><br>


	<div class="container">
		<form class="form-signin m-0" action="core.php" method="POST">
			<h2 class="form-signin-heading text-center">Please sign in</h2>
			<label for="username" class="sr-only">Username</label>
			<input type="text" id="username" name="username" class="form-control mb-1" placeholder="username" required autofocus>
			<label for="inputPassword" class="sr-only">Password</label>
			<input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
			<br>
			<button class="btn btn-lg btn-success btn-block" type="submit" name="signin" >Sign in</button>
		</form>
		<div class="mt-1">
			<a id="regis" class="btn btn-lg btn-primary btn-block" href="register.php" name="regis">Register</a>
		</div>
		<!-- 	Display error -->
		<?php if(isset($_GET['error'])): ?>
			<div class="alert alert-danger fade in alert-dismissible show m-5">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true" style="font-size:20px">×</span>
				</button>  <strong>Warning!</strong> Invalid username or password. Please try again.
			</div>
		<?php endif; ?>

		<!-- Display success -->
		<?php if(isset($_GET['success'])): ?>
			<div class="alert alert-success fade in alert-dismissible show" style="margin-top:18px;">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true" style="font-size:20px">×</span>
				</button>  <strong>Success!</strong> This alert box indicates a successful or positive action.
			</div>
		<?php endif; ?>

		<!-- Display validate email -->
		<?php if(isset($_GET['validationrequired'])): ?>
			<div class="alert alert-info fade in alert-dismissible show" style="margin-top:18px;">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true" style="font-size:20px">×</span>
				</button>  <strong>Just one last step!</strong> Please check your email to validate your account.
			</div>
		<?php endif; ?>

		<!-- Display duplicate username -->
		<?php if(isset($_GET['duplicateusername'])): ?>
			<div class="alert alert-danger fade in alert-dismissible show" style="margin-top:18px;">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true" style="font-size:20px">×</span>
				</button>  <strong>Error!</strong> Username is already taken. Please try again with a different username.
			</div>
		<?php endif; ?>

		<!-- Display duplicate email -->
		<?php if(isset($_GET['duplicateemail'])): ?>
			<div class="alert alert-danger fade in alert-dismissible show" style="margin-top:18px;">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true" style="font-size:20px">×</span>
				</button>  <strong>Error!</strong> Email is already taken. Please try again with a different email.
			</div>
		<?php endif; ?>

		<!-- Display duplicate email -->
		<?php if(isset($_GET['passwordsdontmatch'])): ?>
			<div class="alert alert-danger fade in alert-dismissible show" style="margin-top:18px;">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true" style="font-size:20px">×</span>
				</button>  <strong>Error!</strong> Passwords DO NOT match. Please try again.
			</div>
		<?php endif; ?>

		<!-- Display thank you -->
		<?php if(isset($_GET['cleared'])): ?>
			<div class="alert alert-success fade in alert-dismissible show" style="margin-top:18px;">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true" style="font-size:20px">×</span>
				</button>  <strong>Thank you!</strong> You may now sign in.
			</div>
		<?php endif; ?>

	</div> <!-- /container -->



	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<!-- ColorBox JavaScript -->
	<script src="js/jquery.colorbox.js"></script>
	<script>
		$(document).ready(function () {
			$('#regis').colorbox({ opacity:0.5 , rel:'group1' });
		});
	</script>


</body>
</html>



