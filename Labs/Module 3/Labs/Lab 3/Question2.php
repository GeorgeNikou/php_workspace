

 <!--For this exercise, you will use a list of ten of the largest cities in the world. (Please note, these are not the ten largest, just a 		    selection of ten from the largest cities.) Create an array with the following values: Tokyo, Mexico City, New York City, Mumbai, Seoul, 	 Shanghai, Lagos, Buenos Aires, Cairo, London.

	 Print these values to the browser separated by commas, using a loop to iterate over the array. Sort the array, then print the values to the browser in an unordered list, again using a loop.

	 Add the following cities to the array: Los Angeles, Calcutta, Osaka, Beijing. Sort the array again, and print it once more to the browser in an unordered list.  -->



	 <?php

	 echo "<br> ========================= LAB 3 QUESTION #2 ============================= " . "<br><br>";



							 //======== ARRAY THAT HOLDS CITIES  ========\\
	 $cities = array("Tokyo", "Mexico City", "New York City", "Mumbai, Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");

	 ?>

	 <!DOCTYPE html>
	 <html lang="en">
	 <head>
	 	<meta charset="UTF-8">
	 	<title>Large Cities</title>
	 </head>
	 <body>



	 	<h1 style="color: green; font-weight: bold;">Large Cities</h1><br><!-- page header -->


	 	<!-- FOR LOOPING CITIES/OPEN -->
	 	<?php
	 	for ($i = 0; $i < COUNT($cities); $i++) {
	 		echo $cities{$i} . ", ";
	 	}
	 	?>
	 	<!-- FOR LOOPING CITIES/CLOSE -->



	 	<!-- UNORDERED LIST (not sorted)/OPEN -->
	 	<ul>
	 		<?php
	 		for ($i = 0; $i < COUNT($cities); $i++) {
	 			echo "<li>{$cities{$i}}</li>";
	 		}
	 		?>

	 	</ul>
	 	<!-- UNORDERED LIST (not sorted)/CLOSE -->


	 	<?php array_push($cities, "Los Angeles", "Calcutta", "Osaka", "Beijing"); ?>

	 	<?php sort($cities); ?>
	 	<?php var_dump($cities) ?>

	 	 	<!-- UNORDERED LIST (sorted)/OPEN -->
	 	<ul>
	 		<?php
	 		for ($i = 0; $i < COUNT($cities); $i++) {
	 			echo "<li>{$cities{$i}}</li>";
	 		}
	 		?>
	 	</ul>

	 	<!-- UNORDERED LIST (sorted)/CLOSE -->



	 </body>
	 </html>