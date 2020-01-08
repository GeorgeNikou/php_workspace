

<!-- Create a function that does the following for a giving number (i.e 10): -->


<?php

echo "<br> ========================= LAB 1 QUESTION #10 ============================= " . "<br><br>";

echo "<br><br>";
rightAngles(30);




function rightAngles($num1){

	for ($i = 1; $i <= $num1; $i++) { //increment parameter for row plus one
		for ($j = 1; $j <= $i; $j++) { //increment parameter for column plus one
			echo "*"; //output asterix
		}

	//====== creating second right angle triangle using nested for loop/OPEN  ======\\
		for ($k = 1; $k <= $num1 - $i; $k++) {
			echo "&nbsp;&nbsp;&nbsp;&nbsp;";
		}for ($j = 1; $j <= $i; $j++) {
			echo "*";
		}
		echo "</br>";
	}//====== creating second right angle triangle using nested for loop/CLOSE  ======\\
}

 
		
?>