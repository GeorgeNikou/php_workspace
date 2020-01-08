<?php
	class Controller{
		private $db;

		public function __construct(){
			$this->db = new DBManager();
		}

		public function getAllStudents(){
			return $this->db->getAllStudents();
		}

		public function getSingleStudent($student_id){
			return $this->db->getSingleStudent($student_id);
		}

		public function addStudent($student){
			return $this->db->addStudent($student);
		}

		public function deleteStudent($id){
			return $this->db->deleteStudent($id);
		}

		public function banStudent($id){
			return $this->db->banStudent($id);
		}

		public function editStudent($student){
			return $this->db->editStudent($student);
		}
	}

 ?>