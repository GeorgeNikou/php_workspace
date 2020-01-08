<?php
session_start();

include "dbConnection.php";

if(isset($_POST['addStudent'])){
	$query = $db->prepare("INSERT INTO student VALUES (DEFAULT, :fname, :lname, :age, :gender, :location, :program, DEFAULT)");
	$query->execute(array(
		"fname" 	=> $_POST['student_firstname'],
		"lname" 	=> $_POST['student_lastname'],
		"age" 		=> $_POST['student_age'],
		"gender" 	=> $_POST['student_gender'],
		"location" 	=> $_POST['student_location'],
		"program" 	=> $_POST['student_program']
	));
	$_SESSION['msg'] = $_POST['student_firstname'] . " " . $_POST['student_lastname'] . " was added successfully!";
	header("location: index.php");
}else if(isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['student_id'])){
	$query = $db->prepare("DELETE FROM student WHERE student_id = :id");
	$query->execute(array("id" => $_GET['student_id']));
	$_SESSION['msg'] = "Student ID " . $_GET['student_id'] . " was deleted successfully!";
	header("location: index.php");
}else if(isset($_GET['action']) && $_GET['action'] == 'ban' && isset($_GET['student_id'])){
	$query = $db->prepare("UPDATE student SET student_status = 0 WHERE student_id = :id");
	$query->execute(array("id" => $_GET['student_id']));
	$_SESSION['msg'] = "Student ID " . $_GET['student_id'] . " was banned successfully!";
	header("location: index.php");
}else if(isset($_POST['editStudent'])){
	$query = $db->prepare("UPDATE student SET student_firstname = :fname, student_lastname = :lname, student_age = :age, student_gender = :gender, student_location = :location, student_program = :program, student_status = :status WHERE student_id = :id");
	$query->execute(array(
		"id" 		=> $_POST['student_id'],
		"fname" 	=> $_POST['student_firstname'],
		"lname" 	=> $_POST['student_lastname'],
		"age" 		=> $_POST['student_age'],
		"gender" 	=> $_POST['student_gender'],
		"location" 	=> $_POST['student_location'],
		"program" 	=> $_POST['student_program'],
		"status" 	=> $_POST['student_status'],
	));
	$_SESSION['msg'] = $_POST['student_firstname'] . " " . $_POST['student_lastname'] . " was edited successfully!";
	header("location: index.php");
}else{
	die("Sorry, no action specified");
}