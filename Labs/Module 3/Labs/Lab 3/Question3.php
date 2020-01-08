

 <!--  For this PHP exercise, create a form asking the user for input about the weather the user has experienced in a month of the user's
	choice. In separate text fields, request the city, month and year in question. Below that, show a series of checkboxes using the same weather conditions you used in Arrays Ex. #1. (Those values were: rain, sunshine, clouds, hail, sleet, snow, wind.) Set up the form to create an array from the checked items.
	In the response section of your script, create an array using the city, month and year the user entered as values. Print the following response "In $city in the month of $month $year, you observed the following weather:", where $city, $month and $year are values from the array you created.
	Next, loop through the $weather[] array you received from the user to send back a bulleted list with the user's responses.  -->


	<?php 
	if(isset($_POST['weatherSub'])){
		/*var_dump($_POST);*/
	}
	?>



	<br> ========================= LAB 3 QUESTION #3 ============================= . <br><br>


	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Weather Forecast</title>
	</head>
	<body>

		<?php $weather = array("rain", "sunshine", "clouds", "hail", "sleet", "snow", "wind"); //array filled with types of weather ?>

		<!-- header information -->
		<h1 style="color: #1CDBFFFF; font-weight: bold;">How's your Weather?</h1>
		<p>Please enter your information.</p><br><br>




		<!-- //==== FORM/OPEN ====\\ -->
		<form action="" method="POST">

			<label for="">Name: </label>
			<input type="text" name="name">


			<label for="">Month: </label>
			<input type="text" name="month">

			<label for="">Year: </label>
			<input type="number" name="number">

			<p>Please choose the kinds of weather you experienced from the list below.<br>Choose all that apply</p>


			<!-- CHECK BOXES PRETAINING WEATHER CONDITIONS/OPEN -->
			<input type="checkbox" name="weather[]" value="sunshine">Sunshine<br>
			<input type="checkbox" name="weather[]" value="clouds">Clouds<br>
			<input type="checkbox" name="weather[]" value="rain">Rain<br>
			<input type="checkbox" name="weather[]" value="hail">Hail<br>
			<input type="checkbox" name="weather[]" value="sleet">Sleet<br>
			<input type="checkbox" name="weather[]" value="snow">Snow<br>
			<input type="checkbox" name="weather[]" value="wind">Wind<br>
			<input type="checkbox" name="weather[]" value="cold">Cold<br>
			<input type="checkbox" name="weather[]" value="heat">Heat<br><br>
			<!-- CHECK BOXES PRETAINING WEATHER CONDITIONS/CLOSE -->

			<input type="submit" value="go" name="weatherSub">

		</form><br>
		<!-- //==== FORM/CLOSE ====\\ -->


		<?php var_dump($weather); ?>


		<h1 style="color: blue">How's <b style="color: #9CFA04FF; text-transform: uppercase;"><i>your</i></b> Weather</h1>

		<?php 
		//====== show the month observed for the weather report ======\\
		if (isset($_POST['weatherSub'])){
			echo "In Immokalee in the month of " . ucfirst($_POST['month']) . " " . $_POST['number'] . ", you observed the following weather: ";
		}
		?>

		<ul>
			<?php 
		//======  Retreive check box data from user/OPEN ======\\
			if (!empty($_POST['weather'])){
				foreach($_POST['weather'] as $selected){

				echo "<li>" .$selected. "</li>"; //SHOW selected checkboxes in an unordered list
			}

		}
		//======  Retreive check box data from user/CLOSE ======\\
		?>
	</ul>


</body>
</html>
