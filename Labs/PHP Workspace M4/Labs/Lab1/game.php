<?php include "core.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Guessing Game - Hezing College</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<style type="text/css">
	body {background-color:#eee;}
	.container-fluid {padding:50px;}
	.container{background-color:white;padding:50px;}
	#title{font-family: 'Lobster', cursive;}
</style>
</head>
<body>
	<div class="container-fluid">
		<div class="container">
			<h2 class="text-center" id="title">
				Mushu's Impossible Guessing Game <br>
				<small>Welcome back <?php echo $_SESSION['user'] ?>, have fun!</small>
				<a href="core.php?logout">log out</a>
			</h2>
			<hr>
			<div class="row">
				<div class="col-md-12">
					<form role="form" action="core.php" method="POST">
						<fieldset>
							<p class="text-uppercase"><b>Try to guess the following word: <big class="text-danger"><em><?= $_SESSION['word'] ?></em></big></b></p>
							<div class="input-group mb-3">
								<input type="text" class="form-control" placeholder="Guess Here" aria-describedby="basic-addon2" name="answer">
								<div class="input-group-append">
									<input type="submit" class="btn btn-info" name="try">
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h1 class="text-center">Game Stats</h1>
					<hr>
				</div>
				<div class="col-md-3 text-center text-primary text-uppercase">
					<div class="card">
						<strong>Game Played</strong>
						<h1>0</h1>
					</div>
				</div>
				<div class="col-md-3 text-center text-success text-uppercase">
					<div class="card">
						<strong>Game Won</strong>
						<h1>0</h1>
					</div>
				</div>
				<div class="col-md-3 text-center text-danger text-uppercase">
					<div class="card">
						<strong>Game Lost</strong>
						<h1>0</h1>
					</div>
				</div>
				<div class="col-md-3 text-center text-info text-uppercase">
					<div class="card">
						<strong>Current Tries</strong>
						<h1>0</h1>
					</div>
				</div>
			</div>
			<hr>

			<?php include 'sections/footer.php'; ?>