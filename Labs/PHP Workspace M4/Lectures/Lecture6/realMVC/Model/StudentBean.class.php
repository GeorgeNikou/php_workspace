<?php
	class StudentBean{
		private $student_id = 0;
		private $student_firstname;
		private $student_lastname;
		private $student_age;
		private $student_gender;
		private $student_location;
		private $student_program;
		private $student_status = 1;

		public function __construct($array){
			foreach ($array as $key => $value)
				 $this->{$key} = $value;
		}

		public function toArray(){
			$array = [];
			$array['student_id'] = $this->student_id;
			$array['student_firstname'] = $this->student_firstname;
			$array['student_lastname'] = $this->student_lastname;
			$array['student_age'] = $this->student_age;
			$array['student_gender'] = $this->student_gender;
			$array['student_location'] = $this->student_location;
			$array['student_program'] = $this->student_program;
			$array['student_status'] = $this->student_status;
			return $array;
		}

		/*GETTERS AND SETTERS*/

	    /**
	    * Gets the value of student_id
	    * @return mixed
	    */
	    public function getStudentId(){
	      return $this->student_id;
	    }

	    /**
	    * Sets the value of student_id
	    * @param mixed $student_id
	    * @return self
	    */
	    public function setStudentId($student_id){
	      $this->student_id = $student_id;
	    }

	    /**
	    * Gets the value of student_firstname
	    * @return mixed
	    */
	    public function getStudentFirstname(){
	      return $this->student_firstname;
	    }

	    /**
	    * Sets the value of student_firstname
	    * @param mixed $student_firstname
	    * @return self
	    */
	    public function setStudentFirstname($student_firstname){
	      $this->student_firstname = $student_firstname;
	    }

	    /**
	    * Gets the value of student_lastname
	    * @return mixed
	    */
	    public function getStudentLastname(){
	      return $this->student_lastname;
	    }

	    /**
	    * Sets the value of student_lastname
	    * @param mixed $student_lastname
	    * @return self
	    */
	    public function setStudentLastname($student_lastname){
	      $this->student_lastname = $student_lastname;
	    }

	    /**
	    * Gets the value of student_age
	    * @return mixed
	    */
	    public function getStudentAge(){
	      return $this->student_age;
	    }

	    /**
	    * Sets the value of student_age
	    * @param mixed $student_age
	    * @return self
	    */
	    public function setStudentAge($student_age){
	      $this->student_age = $student_age;
	    }

	    /**
	    * Gets the value of student_gender
	    * @return mixed
	    */
	    public function getStudentGender(){
	      return $this->student_gender;
	    }

	    /**
	    * Sets the value of student_gender
	    * @param mixed $student_gender
	    * @return self
	    */
	    public function setStudentGender($student_gender){
	      $this->student_gender = $student_gender;
	    }

	    /**
	    * Gets the value of student_location
	    * @return mixed
	    */
	    public function getStudentLocation(){
	      return $this->student_location;
	    }

	    /**
	    * Sets the value of student_location
	    * @param mixed $student_location
	    * @return self
	    */
	    public function setStudentLocation($student_location){
	      $this->student_location = $student_location;
	    }

	    /**
	    * Gets the value of student_program
	    * @return mixed
	    */
	    public function getStudentProgram(){
	      return $this->student_program;
	    }

	    /**
	    * Sets the value of student_program
	    * @param mixed $student_program
	    * @return self
	    */
	    public function setStudentProgram($student_program){
	      $this->student_program = $student_program;
	    }

	    /**
	    * Gets the value of student_status
	    * @return mixed
	    */
	    public function getStudentStatus(){
	      return $this->student_status;
	    }

	    /**
	    * Sets the value of student_status
	    * @param mixed $student_status
	    * @return self
	    */
	    public function setStudentStatus($student_status){
	      $this->student_status = $student_status;
	    }
    }


 ?>