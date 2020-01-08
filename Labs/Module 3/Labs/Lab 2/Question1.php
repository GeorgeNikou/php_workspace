

 <!-- Define a function maxOfFive() that takes five numbers as arguments and returns the
 	largest of them using the built-in max function. -->



 	<?php  

 	echo "<br> ========================= LAB 2 QUESTION #1 ============================= " . "<br><br>";

 	echo maxOfFive(2,4,5,6,1); //calling the function


 	//== function to find the largest # of 5 numbers ==\\
 	function maxOfFive($num1, $num2, $num3, $num4, $num5){
 		echo "<br>" . " " . $num1 . " " . $num2 ." " . $num3 ." " . $num4 ." " . $num5 . "<br>"; //display all the numbers
 		return "The largest number is: " . max($num1, $num2, $num3, $num4, $num5); // return the largest number
 	}

 	?>