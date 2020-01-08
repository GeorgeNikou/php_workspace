<?php
session_start();
include "dbConnection.php";
$query 	= $db->query("SELECT * FROM posts");
$posts 	= $query->fetchAll(PDO::FETCH_ASSOC);
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
</head>
<body>
	<br><br>

	<div class="container">
		<h2 class="text-center text-uppercase text-danger font-weight-bold">Mini Chat</h2><br>
		<img class="mx-auto d-block bg-dark" width="100" src="avatars/<?php echo $_SESSION['loguser']['avatar'] ?>" alt="">
		<div class="border border-light text-center"><br>
			<p>Welcome <?php echo $_SESSION['loguser']['username'] ?></p>
			<a href="index.php">Log out</a>
		</div><br><br><br>

		<table class="table table-hover m-4">
			<tbody>
				<p class="text-center text-secondary">Messages from database</p>
				<?php foreach ($posts as $post):?>
				<tr>
					<td><img width="40" src="avatars/<?php echo $post['avatar'] ?>" alt=""></td>
					<td class="text-info font-weight-bold text-left"><?php echo $post['username'] ." " . "says: " ?> </td>
					<td class="font-italic"><?php echo $post['comment'] ?></td>
				</tr>
			<?php endforeach; ?>

			</tbody>
		</table>
	</div><br><br>

	<!-- form/open -->
	<div class="container mb-5">
		<form class="form-signin" action="core.php" method="POST">
			<h2 class="form-signin-heading text-center">SEND A MESSAGE</h2>
			<input style="height: 250px" type="textarea" name="message" id="textarea" class="form-control" required autofocus>
			<br>
			<button class="btn btn-lg btn-primary btn-block" name="sendmessage" type="submit">Send</button>
		</form>
	</div> <!-- form/close -->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>
