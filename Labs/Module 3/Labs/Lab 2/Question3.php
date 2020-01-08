<?php 

/*  Define a function that calls three other funtions (function sum(), a function multiply(),
	and a function subtract()) that sums, multiplies and subtract (respectively) the five numbers
	received as arguments. And return the sum, the multiplication and the subtraction of the
	values from highest to lowest. The outer function should then return the sum, the
	multiplication and the subtraction of all the result.*/ 


	/*echo $GLOBALS['$calc1'];*/



	echo "<br> ========================= LAB 2 QUESTION #3 ============================= " . "<br><br>";



	echo operations(1,2,3,4,5); //calling the main outter function


	




		//=== OUTER Function for addition/OPEN ===\\
	function operations($num1, $num2, $num3, $num4, $num5){
		
		//calling addition function and display results
		echo $num1 . " + " . $num2 . " + " . $num3 ." + " . $num4 ." + " . $num5 . " = " . sum($num1, $num2, $num3, $num4, $num5) . "<br>"; 

		//calling subtraction function and display results
		echo $num1 . " - " . $num2 . " - " . $num3 ." - " . $num4 ." - " . $num5 . " = " . subtract($num1, $num2, $num3, $num4, $num5) . "<br>"; 

		//calling multplication function and display results
		echo $num1 . " * " . $num2 . " * " . $num3 ." * " . $num4 ." * " . $num5 . " = " . multiply($num1, $num2, $num3, $num4, $num5) . "<br>"; 

		
		//=== stored variables result of calculations for outter use ===\\
		$added = sum($num1, $num2, $num3, $num4, $num5);
		$subtracted = subtract($num1, $num2, $num3, $num4, $num5);
		$multiplied = multiply($num1, $num2, $num3, $num4, $num5);

		$calc1 = ($added + $subtracted + $multiplied); //storing final result of addition
		echo $added . " + " . $subtracted . " + " . $multiplied . " = " . $calc1 . "<br>"; //displaying sum of outter

		$calc2 = ($added - $subtracted - $multiplied); //storing final result of addition
		echo " - " . $added . " " .  $subtracted . " - " . $multiplied . " = " . $calc2 . "<br>"; //displaying subtraction
																								  //of outter 

		$calc3 = ($added * $subtracted * $multiplied); //storing final result of addition
		echo $added . " * " . $subtracted . " * " . $multiplied . " = " . $calc3 . "<br>"; //displaying sum of outter
	}
		//=== OUTER Function for addition/CLOSE ===\\




		//=== Function for addition/OPEN ===\\
	function sum($num1, $num2, $num3, $num4, $num5) {
		return ($num1 + $num2 + $num3 + $num4 + $num5);
	}
		//=== Function for addition/CLOSE ===\\




		//=== Function for subtraction/OPEN ===\\
	function subtract($num1, $num2, $num3, $num4, $num5) {
		return ($num1 - $num2 - $num3 - $num4 - $num5);
	}
		//=== Function for subtraction/CLOSE ===\\




		//=== Function for multiplication/OPEN ===\\
	function multiply($num1, $num2, $num3, $num4, $num5) {
		return ($num1 * $num2 * $num3 * $num4 * $num5);
	}
		//=== Function for multiplication/CLOSE ===\\


	?>