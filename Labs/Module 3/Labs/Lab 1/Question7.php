

<!-- Mimic a for loop using a while loop, where you have a looping variable, a condition to stop and 
	incrimination of that that variable from 0 to 100; Only display the even numbers -->



	<?php  


	echo "<br> ========================= LAB 1 QUESTION #7 ============================= " . "<br><br>";

	$loppingVariable = 0; //Looping vaiable

	while ($loppingVariable <= 100) { //initializer (The condition)
		$loppingVariable++; //incrementation
		if($loppingVariable % 2 == 0){
			echo "Number: " . $loppingVariable . "<br><br>"; //display numbers
		}
			
	}

	?>