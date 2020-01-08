<?php session_start()?>
<?php include "sections/header.php" ?>

<body>
	<div class="container-fluid">
		<div class="container">
			<h2 class="text-center" id="title">Mushu's Impossible Guessing Game</h2>
			<hr>
			<div class="row">
				<div class="col-md-5">
					<form role="form" method="post" action="core.php">
						<fieldset>
							<!-- Registration/Open -->
							<p class="text-uppercase"><b>SIGN UP</b></p>
							<div class="form-group">
								<input type="text" name="username" id="username" class="form-control input-lg" placeholder="username">
							</div>

							<div class="form-group">
								<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address">
							</div>
							<div class="form-group">
								<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
							</div>
							<div class="form-group">
								<input type="password" name="cpassword" id="cpassword" class="form-control input-lg" placeholder="Confirm Password">
							</div>
							<div>
								<input type="submit" class="btn btn-lg btn-primary" value="Register" name="register">
							</div>
							<br>
							<!-- Registration/Close -->
						</fieldset>
					</form>
				</div>

				<div class="col-md-5 offset-md-2">
					<form role="form" method="POST" action="core.php">
						<fieldset>
							<p class="text-uppercase"><b>Login using your account</b></p>
							<!-- Login/Open -->
							<div class="form-group">
								<input type="text" name="lusername" id="username" class="form-control input-lg" placeholder="username">
							</div>
							<div class="form-group">
								<input type="password" name="lpassword" id="password" class="form-control input-lg" placeholder="Password">
							</div>
							<div>
								<input type="submit" class="btn btn-md btn-success" value="Sign In" name="login">
							</div>
							<!-- Login/Close -->
						</fieldset>
					</form>
				</div>
			</div>
			<!-- 	Display error -->
			<?php if(isset($_GET['error'])): ?>
				<div class="alert alert-danger fade in alert-dismissible show">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true" style="font-size:20px">×</span>
					</button>    <strong>Danger!</strong> This alert box indicates a dangerous or potentially negative action.
				</div>
			<?php endif; ?>

			<!-- Display success -->
			<?php if(isset($_GET['success'])): ?>
				<div class="alert alert-success fade in alert-dismissible show" style="margin-top:18px;">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true" style="font-size:20px">×</span>
					</button>    <strong>Success!</strong> This alert box indicates a successful or positive action.
				</div>
			<?php endif; ?>

			<?php include "sections/footer.php" ?>