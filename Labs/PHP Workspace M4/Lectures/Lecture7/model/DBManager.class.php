<?php
	class DBManager{
		private $db;

		public function __construct(){
			$host 	= "localhost";
			$user 	= "root";
			$pass 	= "";
			$dbname = "herzing";

			//Tris to connect to the database using the provided credentials
			//if the connection works it will keep the persistance, else it will throw and error
			try{
				$this->db = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

				/*TO SEE MYSQL ERRORS*/
				$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    			$this->db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
			}catch(Exception $e){
				die("Database Connection Error: " . $e->getMessage());
			}
		}

		/**
		 * getAllStudents : Function to get all the student in the database and return an object
		 * @return [studentBean]
		 */
		public function getAllStudents(){
			$query 		= $this->db->query("SELECT * FROM student ORDER BY student_id"); //whenever you want to select everything from your table
			$studentsArray = $query->fetchAll(PDO::FETCH_ASSOC);
			$studentsObj = [];

			foreach ($studentsArray as $array)
				$studentsObj[] = new StudentBean($array);

			return $studentsObj;
		}

		/**
		 * getAllStudents : Function to get a single student in the database and return an object
		 * @return [studentBean]
		 */
		public function getSingleStudent($student_id){
			$query 	= $this->db->prepare("SELECT * FROM student WHERE student_id = :student_id");
			$query->execute(array($student_id));
			$result = $query->fetch(PDO::FETCH_ASSOC);

			if($result)
				return new StudentBean($result);
			else
				return false;
		}

		/**
		 * [addStudent function to add a student in the database]
		 * @param [type] $student [StudentBean]
		 */
		public function addStudent($student){
			$array = $student->toArray();
			unset($array['student_id']); //removing the id from the array since it has a default value upon addin it

			$query = $this->db->prepare("INSERT INTO student VALUES (DEFAULT, :student_firstname, :student_lastname, :student_age, :student_gender, :student_location, :student_program, :student_status)");
			$query->execute($array);
		}

		/**
		 * [deleteStudent function to delete a student from the database]
		 * @param  [type] $id [the id of the student to delete]
		 * @return [type]     [true or false if the student was deleted or not]
		 */
		public function deleteStudent($id){
			$query = $this->db->prepare("DELETE FROM student WHERE student_id = :id");
			return $query->execute(array("id" => $id));
		}

		/**
		 * [banStudent function to ban a student from the database]
		 * @param  [type] $id [the id of the student to delete]
		 * @return [type]     [true or false if the student was deleted or not]
		 */
		public function banStudent($id){
			$query = $this->db->prepare("UPDATE student SET student_status = 0 WHERE student_id = :id");
			return $query->execute(array("id" => $id));
		}

		/**
		 * [editStudent function to edit a student in the database]
		 * @param  [type] $student [description]
		 * @return [type]          [T/F]
		 */
		public function editStudent($student){
			$query = $this->db->prepare("UPDATE student SET student_firstname = :student_firstname, student_lastname = :student_lastname, student_age = :student_age, student_gender = :student_gender, student_location = :student_location, student_program = :student_program, student_status = :student_status WHERE student_id = :student_id");
			return $query->execute($student->toArray());
		}
	}



?>