
<!-- Display the average of all the numbers between two numbers saved in two variables. Display all the 
	numbers, the sum and the average. -->


	<?php 

	echo "<br> ========================= LAB 1 QUESTION #4 ============================= " . "<br><br>";


	// ====================================================================== \\
	// ======================== Declaring variables ========================= \\
	// ====================================================================== \\
	$num1 = 50;
	$num2 = 100;
	$tmp = $num1;
	$average = 0;

	// ====================================================================== \\
	// ================== scouring our two varibale numbers ================= \\
	// ====================================================================== \\
	for ($i=$num1; $i <= $num2; $i++) { 
		++$tmp;
		$average = ($i + $tmp) / 2;
		echo "Numbers: " . $i . " & " . $tmp . "<br>"; //display all the numbers
		echo "The sum of the numbers: " . ($i + $tmp) . "<br>"; //display the sum
		echo "The average is: " . $average . "<br><br>"; //display the average
	}


	?>