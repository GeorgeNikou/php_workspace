<?php
include "core.php";
if(isset($_GET['validated'])){
	$id = decrypt($_GET['validated']);
	$query = $db->prepare("UPDATE users SET validate = 1 WHERE id = :id");
	$query->execute(array("id" => $id));

	$query = $db->prepare("SELECT username, email FROM lab2module4.users WHERE id = :id");
	$query->execute(array(
		"id" 	=> $id
	));

	$results = $query->fetch();

	$to = $results['email'];
	$subject = "Validation Confirmed!";

	$headers = array(
	//'From' 			=> 'george.nikou05@gmail.com',
	//'Reply-To' 		=> 'no-reply',
		'X-Mailer'		=> 'PHP/' . phpversion(),
		'MIME-Version' 	=> '1.0',
		'Content-type' 	=>  'text/html; charset=utf-8'
	);


	$msg = '
	<!DOCTYPE html>
	<html>
	<body>
	<h1>Hi,  ' . $results['username'] . '...!</h1>
	<p>Thank you for confirming your account!</p>
	<p>---<br>George N.</p>
	</body>
	</html>

	';

	mail($to, $subject, $msg, $headers);

	header('location: index.php?cleared');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Validate email</title>
</head>
<body>

	<h1 class="text-success">Congratulations, you have successfully validated your email address. <br></h1>
	<p>please click this link to be re-directed to the home page.<a href="http://localhost/PHP%20Workspace%20M4/Labs/Lab2/index.php?cleared">CLICK HERE!</a></p>


	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>
