
<!-- Write a program called CheckerBoard that displays the following n×n (n=7) checkerboard pattern using 
	two nested for-loops. -->



	<?php

	echo "<br> ========================= LAB 1 QUESTION #4 ============================= " . "<br><br>";

	// ============================================================ \\
	// ========= nested for loop for building a square ============ \\
	// ============================================================ \\
	for ($i=1; $i <= 7; $i++) { 
		if($i % 2==0){ // add a space for all even numbered rows
			echo "<br>" . "&nbsp" . "#";
		}else{
			echo "<br>" . "#";
		}
		for ($y=1; $y < 7; $y++) { 
			echo "&nbsp #";
		}
	}


	?>