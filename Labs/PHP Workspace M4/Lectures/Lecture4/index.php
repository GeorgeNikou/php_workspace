<?php 
	require "House.class.php";
	require "Student.class.php";

	$obj1 = new House();
	$obj2 = new House();
	$obj3 = new House();

	$colors = array(
					"bedroom" 	=> "black",
					"bathroom" 	=> "gray",
					"kitchen" 	=> "beige"
					);

	$obj1->primaryColor = "Yellow";
	$obj1->address = "45 Summer Dr";
	$obj1->setRoomsColors($colors);

	$obj2->primaryColor = "Red";
	$obj2->address = "157 Wicked Cr";

	$obj3->primaryColor = "Blue";
	$obj3->address = "57 Sesame Street";

	echo $obj1->getDesc() . "<br>";
	echo $obj2->getDesc() . "<br>";
	echo $obj3->getDesc() . "<br>";

	$student1 = new Student("George BBQ", 21, "Male", "AEC");
	$student2 = new Student("Jessica", 27, "Female", "MASTER");

	$student1->setAge("21");
	$student1->setProgram("DEC");

	echo $student2;
	echo $student1;

	echo $student1->study("Geography");
	echo $student1->sleeping(14);

	echo "<br><br>";

	echo "Static Var: " . Student::$init . "<br>";
	echo "Static Function: " . Student::staticTest() . "<br>";
	echo "Static Function: " . $student1->staticTest() . "<br>";


?>