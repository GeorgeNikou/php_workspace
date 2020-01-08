<?php 
	/**
	 * 
	 */
	class UserController{
		
		private $db;
		function __construct(){
			$this ->db = new DBManager();
		}

		//Login Validation
		function login(){
		}

	//Function Logout
		function logout(){
		}

	//Validate Register
		function register(){
			if(isset($_POST['register'])){
			// creating object of user class/inserting user into table called users
				$user = new User($_POST['username'], $_POST['password'], basename( $_FILES["fileToUpload"]["name"]), $_POST['email'] );
				$query = $db->prepare("INSERT INTO lab2module4.users VALUES (DEFAULT, :username, :password, :avatar, DEFAULT, DEFAULT, :email)");
				$query->execute(array(
					"username" 	=> $user->getUsername(),
					"password" 	=> $user->getPassword(),
					"avatar" 	=> basename( $_FILES["fileToUpload"]["name"]),
					"email" 	=> $user->getEmail()
				));
			}
		}

		function validate(){
		}

		function myEncoding($tmp){
			$encoding = strrev($tmp);
			$encoding = str_rot13($encoding);
			$encoding = base64_encode($encoding);
			return $encoding;
		}
		function myDecoding($tmp){
			$decoding = base64_decode($tmp);
			$decoding = str_rot13($decoding);
			$decoding = strrev($decoding);
			return $decoding;
		}


	}
	

	?>