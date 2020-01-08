<?php
class IndexController{
	private $db;

	function __construct(){
		$this->db = new DBManager();
	}

	function view(){
		$students = $this->db->getAllStudents();
		require_once 'view/studentTable.php';
	}

	function error(){
		require_once 'view/404.php';
	}
}

