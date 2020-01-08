<?php
session_start();
$userDB = array(); // main db array
$people = array();
// register a user and store in a text file called 'users.txt'
if (isset($_POST['register'])){
	if($_POST['username'] == "" OR $_POST['password'] == "" OR $_POST['cpassword'] == "" OR $_POST['password'] != $_POST['cpassword']){
		header("location: index.php?error");
	}else{
		$user = array(
			'username' 			=> $_POST['username'],
			'email' 			=> $_POST['email'],
			'password'			=> $_POST['password'],
			'confirm password'	=> $_POST['cpassword']
		);
		//$userDB[$_POST['username']] = $user;

		$registered_users = fopen("users.txt", "a+") or die("file doesn't exist");
		fwrite($registered_users, serialize($user) ."\r\n");
		fclose($registered_users);

		header("location: index.php?success");
	}
}


	// User login
if (isset($_POST['login'])){

// validate empty login information
	if ($_POST["lusername"] == "" OR $_POST["lpassword"] == ""){
		header("location: index.php?error");
	}

$registered_users = fopen("users.txt", "r"); // read only registered users

while (!feof($registered_users))
	$userDB[] = unserialize(fgets($registered_users));

for ($i=0; $i<COUNT($userDB);$i++){
	if ($userDB[$i]['username'] == $_POST["lusername"] AND $userDB[$i]['password'] == $_POST["lpassword"]){
		$_SESSION['user'] = $_POST["lusername"];

	}
}

if (isset($_SESSION['user'])){
	$stats = array(
		"username"			=> $_SESSION['user'],
		"games played" 		=> 0,
		"games won" 		=> 0,
		"games lost" 		=> 0,
		"current tries" 	=> 0
	);
	$_SESSION['stats'] = $stats;

	$score = fopen("stats.txt", "w") or die("file doesn't exist");
	fwrite($score, serialize($stats) ."\r\n");
	fclose($score);
	header("location: game.php");
} else{
	header("location: index.php?error");
}

}

if (isset($_GET['logout'])){
	session_destroy();
	header("location: index.php?logout");
}

// ======================================================================================================================== //
//adding words file to variable
$temp = fopen("words.txt", "r"); 
while (!feof($temp)) {
	$words[] =trim(fgets($temp));
$shuffled_index = array_rand($words); //shuffle index
}



if (!isset($_SESSION['word'])){
$_SESSION['word'] = $words[$shuffled_index]; //store shuffled word in session
}


if (isset($_POST['try'])){
	if ($_SESSION['word'] == $_POST['answer']) {
	//$shuffled_index = array_rand($words); //shuffle index
	//$_SESSION['word'] = $words[$shuffled_index]; //store shuffled word in session
		header("location: game.php?correct!");


		var_dump($_SESSION['word']);
		var_dump($_POST['answer']);
	}else{
	//$shuffled_index = array_rand($words); //shuffle index
	//$_SESSION['word'] = $words[$shuffled_index]; //store shuffled word in session
		header("location: game.php?incorrect!");


		var_dump($_SESSION['word']);
		var_dump($_POST['answer']);
	}
}






?>