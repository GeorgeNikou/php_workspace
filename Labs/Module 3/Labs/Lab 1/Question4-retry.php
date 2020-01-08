
<!-- Display the average of all the numbers between two numbers saved in two variables. Display all the 
	numbers, the sum and the average. -->


	<?php 

	echo "<br> ========================= LAB 1 QUESTION #4 ============================= " . "<br><br>";


	// ====================================================================== \\
	// ======================== Declaring variables ========================= \\
	// ====================================================================== \\
	$num1 = 50;
	$num2 = 70;
	$sum = 0;
	$tmp = $num2 - $num1;
	$average = 0;

	for ($i=$num1 + 1; $i <= $num2 -1; $i++) { // adjusting starting and ending number points
		echo "Number: " . $i . "<br>"; // Displaying the numbers
		$sum += $i; //calculating the sum

	}

	$average = $sum / $tmp;
	echo "<br> The sum: " . $sum . ".<br>"; //Displaying the sum
	echo "The average: " . $average . ".<br>"; //Displaying the average


	

	?>