<?php
class AddController{
	private $db;

	function __construct(){
		$this->db = new DBManager();
	}

	function view(){
		require_once 'view/add.php';
	}

	function register(){
		if(isset($_POST['register'])){
			unset($_POST['register']); //remove non related bean property
			$student = new StudentBean($_POST);
			$this->db->addStudent($student);

			$_SESSION['msg'] = $student->getStudentFirstname() . " " . $student->getStudentLastname() . " was added successfully!";
			header("location: index.php");
		}
	}

	function error(){
		require_once 'view/404.php';
	}
}

