

<!-- When investing, the interest rate can go up and down within a period of time. Create a for loop that 
	represent the daily earnings of $10,000 invested at 3.2% a year. The rate goes down every 30 days to 
	1.2% then goes back to normal the following day.  -->



	<?php  


	echo "<br> ========================= LAB 2 QUESTION #7 ============================= " . "<br><br>";


	/*echo "The Big MONEY!!! <br>";
	echo "<br>";*/

	$tmp = 10000; // to be used to subtract total profit
	$invested = 10000; //total invested daily
	$days = 365.25; // Total days in a year
	$dailyEarnings = 0; // Profit gained




	for($i = 1;$i <= 365; $i++){
		echo "Day : " . $i . " Total profit: " . $dailyEarnings . "$" .  "<br>";

		if ($i % 30==0) {

			$dailyEarnings = ($invested + (0.012/$days)*$invested);
			$invested = $dailyEarnings;
			/*echo " invested Earn With Rate Down: " . $dailyEarnings . "<br>". "$ interest with Rate Down at 1.2% <br>";*/
			echo " Total with a 1.2% interest rate: " . ($dailyEarnings) . "$" . "<br><br>";

		} else {

			$dailyEarnings=($invested+ (0.032/$days)*$invested);
			$invested =$dailyEarnings;
			/*echo " invested Earn With no Rate Down: " . $dailyEarnings . "<br>" ."$ interest with no with Rate down at 3.2% <br>";*/
			echo " Total with a 3.2% interest rate: " . ($dailyEarnings) . "$" . "<br><br>";
		}
		echo "<br>";
	}	


	echo "total profit earned at the end of the year: " . number_format((float)($dailyEarnings-$tmp), 2, '.', ''); //display final
																											//results of total profit earned 


	?>