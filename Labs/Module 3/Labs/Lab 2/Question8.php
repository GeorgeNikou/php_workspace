

<!-- 8. Create a function that accepts a number as an argument and produce de follow as an example: -->



<?php 

	echo "<br> ========================= LAB 1 QUESTION #8 ============================= " . "<br><br>";

	whatever(50);

	function whatever($number){

		for($i = 1; $i <= $number; $i++){
			for($j = $number; $j >= 1; $j--){

				if($j == $i){
					echo $i;
				}else{
					echo ".";
				}
			}			 
			echo "<br>";

		}

	}
?>