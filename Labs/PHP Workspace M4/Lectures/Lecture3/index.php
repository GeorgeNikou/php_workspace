<?php 
	/*$str = "george123...";
	$password =  md5($str);
	$options = ['cost' => 12,];

	echo $str . "<br>";
	echo md5($str) . "<br>";
	echo sha1(md5($str)) . "<br>";
	echo hash('sha256', $str) . "<br>";

	echo password_hash($str, PASSWORD_DEFAULT). "<br>";*/
	/*echo password_hash($str, PASSWORD_BCRYPT, $options). "<br>";
	echo password_hash($str, PASSWORD_ARGON2I). "<br>";*/
	//echo password_hash($str, PASSWORD_ARGON2ID). "<br>";

	/*if(md5($str) == $password)
		echo "YES";
	else
		echo "NO";

	echo "<br>";
	echo "<br>";

	$base64 = base64_encode($str);
	$rot13 = str_rot13("abcd");
	$rev = strrev("herzing college");
	$spec = str_replace(array("e", "a"), array("!#","#!"), "herzing college montreal");

	echo base64_encode($base64). "<br>";
	echo base64_decode($base64). "<br>";
	echo $rot13 . "<br>";
	echo str_rot13($rot13). "<br>";
	echo $rev . "<br>";
	echo strrev($rev) . "<br>";
	echo $spec . "<br>";
	echo str_replace(array("!#","#!"), array("e", "a"), $spec) . "<br>";


	echo "<br>";
	echo "<br>";

	$test = "herzing college montreal";
	$enc = encrypt($test);

	echo $enc. "<br>";
	echo decrypt($enc);*/


	function encrypt($str){
		$enc = str_rot13($str);
		$enc = base64_encode($enc);
		$enc = "b64Y" . $enc . "24BGT";
		$enc = strrev($enc);

		return $enc;
	}


	function decrypt($str){
		$decr = strrev($str);
		$decr = str_replace(array("b64Y", "24BGT"), "", $decr);
		$decr = base64_decode($decr);
		$decr = str_rot13($decr);

		return $decr;
	}


	$to = "bgeorgealdly@gmail.com";
	$subject = "Please validate your account to continue!";
	$id = encrypt(1);

	$headers = array(
	    'From' 			=> 'george@marketingwebsites.ca',
	    'Reply-To' 		=> 'george@marketingwebsites.ca',
	    'X-Mailer'		=> 'PHP/' . phpversion(),
	    'MIME-Version' 	=> '1.0',
	    'Content-type' 	=>  'text/html; charset=utf-8'
	);

	$msg = '
		<!DOCTYPE html>
			<html>
				<body>
					<h1>Hi, George ...!</h1>
					<p>Please click here to validate your account: <a href="http://localhost/Workspace%20M4/Lecture3/validate.php?user=' . $id . '">HERE</a></p>
					<p>---<br>George B.</p>
				</body>
		</html>

	';

	$mail = mail($to, $subject, $msg, $headers);

	if($mail)
		echo "email sent!";
	else
		echo "no goooooooood";


?>
