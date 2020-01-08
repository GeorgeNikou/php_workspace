

<!-- Write a program that determines a student’s grade. The program will have three variables for the three types of 
	 scores (quiz, mid-term, and final scores) and determine the grade based on the following rules: 
	• if the average score >=90% =>grade=A 
	• if the average score >= 70% and <90% => grade=B 
	• if the average score>=50% and <70% =>grade=C 
	• if the average score<50% =>grade=F  -->


	<?php 
// ======== three variable (grades) ======== \\
	$quiz = 71;
	$midTerm = 93;
	$finals = 57;

	echo "<br> ========================= LAB 1 QUESTION #1 ============================= " . "<br><br>";

// ======== The average of the students three grades ======== \\
	$totalAverage = (($quiz + $midTerm + $finals) / 3);
	echo  "Final average mark is: " . round($totalAverage) . "%.<br>";

// ======== Verify which mark falls into which category (Grade) ======== \\
	if ($totalAverage >= 90){
		echo "The student has achieved a: GRADE A";

	}elseif ($totalAverage >= 70 && $totalAverage < 90) {
		echo "The student has achieved a: GRADE B";

	}elseif ($totalAverage >= 50 && $totalAverage < 70){
		echo "The student has achieved a: GRADE C";

	}elseif ($totalAverage<50){
		echo "The student has achieved a: GRADE F";
	}
	?>