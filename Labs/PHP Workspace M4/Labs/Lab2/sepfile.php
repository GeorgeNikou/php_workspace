<?php

$to = "george.nikou05@gmail.com";
$subject = "Please validate your account to continue!";
$id = 21;

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
<h1>Hi, George ...!</h1>
<p>Please click here to validate your account: <a href="http://localhost/PHP%20Workspace%20M4/Labs/Lab2/validate.php?validated=' . $id . '">CLICK HERE</a></p>
<p>---<br>George N.</p>
</body>
</html>

';

var_dump(mail($to, $subject, $msg, $headers));
 ?>