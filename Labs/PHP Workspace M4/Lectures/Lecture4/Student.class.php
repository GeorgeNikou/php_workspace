<?php

class Student{
	//Properties
	private $name;
	private $age;
	private $gender;
	private $program;
	private $availablePrograms = ["AEC", "DEC", "BAC", "MASTER", "MBA", "DOC"];
	static $init = 0;

	public function __construct($name, $age, $gender, $program){
		$this->name 	= $name;
		$this->age 		= $age;
		$this->gender 	= $gender;
		$this->program 	= $program;
		self::$init++;
	}

	public function study($subject){
		return $this->name . " has been studying for " . $subject . "<br>";
	}

	public function sleeping($hrs){
		return $this->name . " has been sleeping for " . $hrs . " hours and counting!";
	}

	public function __toString(){
		$str = "";
		$str .= "Name: " . $this->name . "<br>";
		$str .= "Age: " . $this->age . "<br>";
		$str .= "Gender: " . $this->gender . "<br>";
		$str .= "Program: " . $this->program . "<br>";
		$str .= "Version: " . self::$init . ".0 <br><br>";;
		return $str;
	}


	/*GETTERS*/
	public function getName(){
		return $this->name;
	}

	public function getAge(){
		return $this->age;
	}

	public function getGender(){
		return $this->gender;
	}

	public function getProgram(){
		return $this->program;
	}

	/*SETTERS*/
	public function setName($name){
		$this->name = $name;
	}

	public function setAge($age){
		$this->age = (int)$age;
	}

	public function setGender($gender){
		$this->gender = $gender;
	}

	public function setProgram($program){
		if(in_array($program, $this->availablePrograms))
			$this->program = $program;
		else
			$this->program = "empty";
	}


	public static function staticTest(){
		return "this is a static function";
	}


	public function __destruct() {
		echo "<br><br>{$this->name} has been killed<br>";
	}
}