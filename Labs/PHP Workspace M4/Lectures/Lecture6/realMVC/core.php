<?php
	spl_autoload_register(function ($class_name) {
		$filename = "Controller/".$class_name . '.class.php';

		if (file_exists($filename))
	    	require_once $filename;
	    else
	    	require_once str_replace("Controller", "Model", $filename);
	});

	session_start();
	$contoller = new Controller();

if(isset($_POST['addStudent'])){
	unset($_POST['addStudent']); //remove non related bean property
	$student = new StudentBean($_POST);
	$contoller->addStudent($student);
	$_SESSION['msg'] = $student->getStudentFirstname() . " " . $student->getStudentLastname() . " was added successfully!";
	header("location: index.php");
}else if(isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['student_id'])){
	$result = $contoller->deleteStudent($_GET['student_id']);
	if($result)
		$_SESSION['msg'] = "Student ID " . $_GET['student_id'] . " was deleted successfully!";
	else
		$_SESSION['msg'] = "oops, sorry something bad happend???? Please see George!";

	header("location: index.php");
}else if(isset($_GET['action']) && $_GET['action'] == 'ban' && isset($_GET['student_id'])){
	if($contoller->banStudent($_GET['student_id']))
		$_SESSION['msg'] = "Student ID " . $_GET['student_id'] . " was banned successfully!";
	else
		$_SESSION['msg'] = "oops, sorry something bad happend???? Please see George!";

	header("location: index.php");
}else if(isset($_POST['editStudent'])){
	unset($_POST['editStudent']); //remove non related bean property
	$student = new StudentBean($_POST);
	$contoller->editStudent($student);

	$_SESSION['msg'] = $student->getStudentFirstname() . " " . $student->getStudentLastname() . " was edited successfully!";
	header("location: index.php");
}else{
	die("Sorry, no action specified");
}