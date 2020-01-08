<!-- Write a function that takes a character (i.e. a string of length 1) and returns true if it is a
	vowel, false otherwise -->


	<?php 
	

	echo "<br> ========================= LAB 2 QUESTION #2 ============================= " . "<br><br>";


	echo vowelChecker("c"); //check character if its a vowel
	

	//=== function to check if vowel true/ consonant false ===\\
	function vowelChecker($character){

		if($character == 'a' || $character == 'e' || $character == 'i' || $character == 'o' || $character == 'u' 
			|| $character == 'A' || $character == 'E' || $character == 'I' || $character == 'O' || $character == 'U')
		{
			echo "(" . $character .")" . " is a vowel | ";
			echo " TRUE";
		}else{
			echo "(" . $character .")" . " is NOT a vowel | ";
			echo " FALSE";
		}
	}

	?>


