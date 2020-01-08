

 <!--  In this PHP exercise, you will create an array of temperatures giving below. After 
		creating your array of 30 high temperatures, find the average high temp, the five 
		warmest high temps and the five coolest high temps. Print your findings to the browser.
		Hint: the HTML character entity for the degree sign is &deg;.
		Feel free to make up the temps or gather data for your own area. Here's a list of thirty 
		Fahrenheit high temperatures you can use if you like:
		68, 70, 72, 58, 60, 79, 82, 73, 75, 77, 73, 58, 63, 79, 78,
		68, 72, 73, 80, 79, 68, 72, 75, 77, 73, 78, 82, 85, 89, 83-->





		<br> ========================= LAB 3 QUESTION #6 ============================= . <br><br>

		<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<title>Temperatures</title>
		</head>
		<body>


			<h1>High temperatures for spring month</h1>
			<?php

			$counter = 0;//vairable with sum of temperatures
			$temp = array(68, 70, 72, 58, 60, 79, 82, 73, 75, 77, 73, 58, 63, 79, 78,
				68, 72, 73, 80, 79, 68, 72, 75, 77, 73, 78, 82, 85, 89, 83);

			//=== Looping array of temps to calculate the total sum ===\\
			for ($i = 0; $i < COUNT($temp); $i++) { 
				$counter = $counter + $temp{$i};
			}

			$average = round($counter / 30); //calculating the average in array of temps
			echo "The average high temperature for the month was " . $average . " F.<br>"; //displaying the average
			sort($temp); //sorting temperature array
			echo "<br>";

			//=== Highest Temperatures ===\\
			for($i = 29; $i > 24; $i--){
				echo $temp[$i] . " F" . "<br>";
			}

			echo "<br>";

			//=== Lowest Temperatures ===\\
			for($i = 0; $i < 5; $i++){
				echo $temp[$i] . " F" . "<br>";
			}


			
			?>

		</body>
		</html>


