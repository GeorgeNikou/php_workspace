<?php
	$host 	= "localhost";
	$dbname = "lab2module4";
	$user 	= "root";
	$pass 	= "";

	//Tris to connect to the database using the provided credentials
	//if the connection works it will keep the persistance, else it will throw and error
	try{
		$db = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
	}catch(Exception $e){
		die("Database Connection Error: " . $e->getMessage());
	}

?>