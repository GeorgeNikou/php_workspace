

 <!-- Arrays allow you to assign multiple values to one variable. For this PHP exercise, write an array variable of weather conditions with the following values: rain, sunshine, clouds, hail, sleet, snow, wind. Using the array variable for all the weather conditions, echo the following statement to the browser:

 We've seen all kinds of weather this month. At the beginning of the month, we had snow and wind. Then came sunshine with a few clouds and some  rain. At least we didn't get any hail or sleet.
 Don't forget to include a title for your page, both in the header and on the page itself -->



 	<?php

 	echo "<br> ========================= LAB 3 QUESTION #1 ============================= " . "<br><br>";



 	$weather = array("rain", "sunshine", "clouds", "hail", "sleet", "snow", "wind"); //array filled with types of weather
 	var_dump($weather);
 	?>

 	<!DOCTYPE html>
 	<html lang="en">
 	<head>
 		<meta charset="UTF-8">
 		<title>Weather Forecast</title>
 	</head>
 	<body>

 		<h1 style="color: blue; font-weight: bold">Todays Weather Report</h1> <!-- styling the header -->
 		<?php echo "We've seen all kinds of weather this month. At the beginning of the month, we had " . $weather[5] . " and " . $weather[6] . ". Then came " . $weather[1] . " with a few " . $weather[2] . " and some  " . $weather[0] . ". At least we didn't get any " . $weather[3] . " or " . $weather[4] . ". "; ?>

 	</body>
 	</html>