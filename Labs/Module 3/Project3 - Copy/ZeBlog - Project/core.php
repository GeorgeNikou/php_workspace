<?php 
date_default_timezone_set('America/Montreal');
session_start();
$database = array(); //main database array
$posts = array(); //posts database array

function moveAvatar(){
	if(!empty($_FILES['fileToUpload']['name'])){

		$target_dir = "avatars/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

		echo "TEST 1";
		var_dump("TEST 1");

		if($check !== false) {
			$uploadOk = 1;

			echo "TEST 2";

			// Check file size
			if ($_FILES["fileToUpload"]["size"] > 5000000){
				$imgError = "Sorry, your file is too large.<br>";
				$uploadOk = 0;

				echo "TEST 3";
			}

			$acceptableTypes = ["jpg", "png", "jpeg", "gif", "tiff", "webm"];

			// Allow certain file formats
			if(!in_array($imageFileType, $acceptableTypes)) {
				$imgError = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$uploadOk = 0;

				echo "TEST 4";
			}

			if($uploadOk){
				if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
					$avatar = basename($_FILES["fileToUpload"]["name"]);
					return $avatar;
					echo "TEST 5";

				}else{
					$imgError = "Sorry, there was an error uploading your file.";

					echo "TEST 6";
				}
			}

		} else {

			echo "TEST 7";

			$imgError = "File is not an image.";
			$uploadOk = 0;
		}
	}
	return false;	
}

function movePostImage(){
	if(!empty($_FILES['fileToUpload']['name'])){

		$target_dir = "posts/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

		echo "TEST 1";
		var_dump("TEST 1");

		if($check !== false) {
			$uploadOk = 1;

			echo "TEST 2";

			// Check file size
			if ($_FILES["fileToUpload"]["size"] > 5000000){
				$imgError = "Sorry, your file is too large.<br>";
				$uploadOk = 0;

				echo "TEST 3";
			}

			$acceptableTypes = ["jpg", "png", "jpeg", "gif", "tiff", "webm"];

			// Allow certain file formats
			if(!in_array($imageFileType, $acceptableTypes)) {
				$imgError = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$uploadOk = 0;

				echo "TEST 4";
			}

			if($uploadOk){
				if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
					$post_image = basename($_FILES["fileToUpload"]["name"]);
					return $post_image;
					echo "TEST 5";

				}else{
					$imgError = "Sorry, there was an error uploading your file.";

					echo "TEST 6";
				}
			}

		} else {

			echo "TEST 7";

			$imgError = "File is not an image.";
			$uploadOk = 0;
		}
	}
	return false;	
}

if(isset($_COOKIE['database']))
	$database = unserialize($_COOKIE['database']);

if(isset($_COOKIE['posts']))
	$posts = unserialize($_COOKIE['posts']);

//===============================================================================================================\\

        //LOGIN//
if(isset($_POST['login'])){
	if(array_key_exists($_POST['username'], $database) AND $database[$_POST['username']]['password'] == $_POST['password']){
		$_SESSION['user'] = $database[$_POST['username']];
		header("location: dashboard.php");
	}else{
		header("location: error.php?error");
	}
}

//===============================================================================================================\\


        //REGISTRATION//
if(isset($_POST['register'])){
	header("location: registration.php");
}




if(isset($_POST['finalize'])){
	$imgError 	= "";
	$avatar 	= "";
	$uploadOk 	= 1;

	var_dump("TEST 0");
	echo "TEST 0";

	$avatar = moveAvatar();
	if ($avatar) {
	//CREATING NEW USERS ARRAY
		$user = array(

			"username" => $_POST['username'],
			"firstname" => $_POST['firstname'],
			"lastname" => $_POST['lastname'],
			"age" => $_POST['age'],
			"gender" => $_POST['gender'],
			"password" => $_POST['password'],
			"postsend" => 0,
			"avatar" => $avatar
		);


		$database[$_POST['username']] = $user;
		setcookie("database", serialize($database), time()+(60*60*24*7), "/");
		header("location: index.php?success");
	}
}



//array_search

//===============================================================================================================\\

        //LOGOUT//
if(isset($_POST['logout'])){
	$_SESSION['user'] = false;
	header("location: index.php");
}

//===============================================================================================================\\

		//PAGE REDIRECTION
if(isset($_GET['troll'])){
	header("location: error.php");
}


//===============================================================================================================\\

		//PAGE REDIRECTION
if(isset($_POST['postsend'])){
	$postCount = 1;
	//$VA = unserialize($_COOKIE['database']['postsend']);
	//$VA['postsend'] = $postCount;
	$postCount++;
	//var_dump($VA);
}

//===============================================================================================================\\


if(isset($_POST['editprofile'])){
	var_dump($_POST);

	// if (in_array($_SESSION['user']['firstname'], $database[$_SESSION['user']]))
	if (array_key_exists($_SESSION['user']['username'], $database)){

		$avatar = moveAvatar();
		
		$database[$_SESSION['user']['username']]['firstname'] = $_POST['firstname'];
		$database[$_SESSION['user']['username']]['lastname'] = $_POST['lastname'];
		$database[$_SESSION['user']['username']]['age'] = $_POST['age'];
		$database[$_SESSION['user']['username']]['gender'] = $_POST['gender'];
		if ($avatar) $database[$_SESSION['user']['username']]['avatar'] = $avatar;

		// setcookie('user', serialize($database));

		// $user = array(
		// "firstname" => $_POST['firstname'],
		// "lastname" => $_POST['lastname'],
		// "age" => $_POST['age'],
		// "gender" => $_POST['gender']);

		/*array_replace()*/

		//reset the user's info with the newly added info
		$_SESSION['user'] = $database[$_SESSION['user']['username']];

		//add back the updated info to the database
		// $database[$_POST['username']] = $user;
		setcookie("database", serialize($database), time()+(60*60*24*7), "/");
		var_dump($database);
		header('location: editprofile.php');
	}

}	

if(isset($_POST['postsend']))	{
	$post_image = movePostImage();
	$posts[] = ["id" => uniqid(), "title" => $_POST['title'], "body" => $_POST['body'], "image" => ($post_image ? $post_image : 'default.jpeg'), "created_at" => date("M d, Y"), "author" => $_SESSION['user']['firstname'] . ' ' . $_SESSION['user']['lastname']];
	setcookie("posts", serialize($posts), time()+(60*60*24*7), "/");
	header('location: index.php');
}


if(isset($_POST['editpassword'])){
	header("location: editpassword.php");
}

if(isset($_POST['logout'])){
	$_SESSION['user'] = null;
	header("location: index.php");
}

?>