<?php
session_start();
include "dbConnection.php";

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

// ================================ Register users  ================================ \\
if(isset($_POST['register'])){
	// check for duplicate usernames
	$query = $db->prepare("SELECT * FROM lab2module4.users WHERE username = :username");
	$query->execute(array(
		"username" 	=> $_POST['username'],
	));

	$results = $query->fetch(); // get login users id
	if($results){
		header("location: index.php?duplicateusername");
		die();
	}

	// check for duplicate emails
	$checkEmail = $db->prepare("SELECT * FROM lab2module4.users WHERE email = :email");
	$checkEmail->execute(array(
		"email" 	=> $_POST['email'],
	));

	$results = $checkEmail->fetch(); // get login users id
	if($results){
		header("location: index.php?duplicateemail");
		die();
	}

	// check if two passwords match
	$pass = $_POST['password'];
	$cpass = $_POST['confirmpassword'];

	if($pass != $cpass){
		header("location: index.php?passwordsdontmatch");
		die();
	}


	if (!empty($_FILES['fileToUpload'])) {
		$target_dir = "avatars/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		if($check !== false) {
			echo "File is an image - " . $check["mime"] . ".";
			$uploadOk = 1;
		} else {
			echo "File is not an image.";
			$uploadOk = 0;
		}
// Check if file already exists
		if (file_exists($target_file)) {
			echo "Sorry, file already exists.";
			$uploadOk = 0;
		}
// Check file size
		if ($_FILES["fileToUpload"]["size"] > 500000) {
			echo "Sorry, your file is too large.";
			$uploadOk = 0;
		}
// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
			echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		$uploadOk = 0;
	}


// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
	} else {
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	}
}


$query = $db->prepare("INSERT INTO lab2module4.users VALUES (DEFAULT, :username, :password, :avatar, DEFAULT, DEFAULT, :email)");
$query->execute(array(
	"username" 	=> $_POST['username'],
	"password" 	=> $_POST['password'],
	"avatar" 	=> basename( $_FILES["fileToUpload"]["name"]),
	"email" 	=> $_POST['email']
));


$query = $db->prepare("SELECT id, username FROM lab2module4.users WHERE username = :username");
$query->execute(array(
	"username" 	=> $_POST['username']
));

$results = $query->fetch();

$_SESSION['msg'] = $_POST['username'] . " " . $_POST['username'] . " was added successfully!";
$_SESSION['username'] = $_POST['username'];
$_SESSION['avatar'] = basename( $_FILES["fileToUpload"]["name"]);
$_SESSION['email'] = $_POST['email'];


$to = $_SESSION['email'];
$subject = "Please validate your account to continue!";
$id = encrypt($results['id']);

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
<p>Please click here to validate your account: <a href="http://localhost/PHP%20Workspace%20M4/Labs/Lab2/validate.php?validated=' . urlencode($id) . '">CLICK HERE.</a></p>
<p>---<br>George N.</p>
</body>
</html>

';


mail($to, $subject, $msg, $headers);
header("location: index.php?validationrequired");
}
// ================================ post message ================================ \\
if(isset($_POST['sendmessage'])){
	$query = $db->prepare("INSERT INTO lab2module4.posts VALUES (DEFAULT, :username, :avatar, :comment)");
	$query->execute(array(
		"username" 	=> $_SESSION['username'],
		"avatar" 	=> $_SESSION['avatar'],
		"comment"	=> $_POST['message']
	));
	header("location: posts.php");
}

// ================================ sign in ================================ \\
if(isset($_POST['signin'])){
	$query = $db->prepare("SELECT * FROM lab2module4.users WHERE username = :username and password = :password and validate = :validate");
	$query->execute(array(
		"username" 	=> $_POST['username'],
		"password" 	=> $_POST['password'],
		"validate"  => 1
	));

	$results = $query->fetch(); // get login users id
	if($results){
		$_SESSION['loguser'] = $results; //setting session username user for welcome message
		header("location: posts.php?loginsuccess");
	}else{
		header("location: index.php?error");
	}
}






/*password_hash(string, PASSWORD_DEFAULT);*/ //compares two values and returns tru if the same(it auto encrpyts the value if not already
											 //encrypted)
?>