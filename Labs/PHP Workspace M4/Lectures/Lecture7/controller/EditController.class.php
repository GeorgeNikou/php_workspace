<?php
class EditController{
	private $db;

	function __construct(){
		$this->db = new DBManager();
	}

	function view(){
		if(isset($_GET['student_id'])){
			$student = $this->db->getSingleStudent($_GET['student_id']);
			require_once 'view/edit.php';
		}else
			$this->error();
	}

	function editStudent(){
		unset($_POST['editStudent']); //remove non related bean property
		$student = new StudentBean($_POST);
		$this->db->editStudent($student);

		$_SESSION['msg'] = $student->getStudentFirstname() . " " . $student->getStudentLastname() . " was edited successfully!";
		header("location: index.php");
	}

	function banStudent(){
		if($this->db->banStudent($_GET['student_id']))
			$_SESSION['msg'] = "Student ID " . $_GET['student_id'] . " was banned successfully!";
		else
			$_SESSION['msg'] = "oops, sorry something bad happend???? Please see George!";

		header("location: index.php");
	}

	function deleteStudent(){
		$result = $this->db->deleteStudent($_GET['student_id']);
		if($result)
			$_SESSION['msg'] = "Student ID " . $_GET['student_id'] . " was deleted successfully!";
		else
			$_SESSION['msg'] = "oops, sorry something bad happend???? Please see George!";

		header("location: index.php");
	}

	function error(){
		require_once 'view/404.php';
	}
}

