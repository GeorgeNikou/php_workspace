

	 <!--In this PHP exercise, you will again use the list of cities in Arrays Exercise #2. Here's
	the list, this time including countries as well as cities:
	Tokyo, Japan; Mexico City, Mexico; New York City, USA; Mumbai, India; Seoul, Korea;
	Shanghai, China; Lagos, Nigeria; Buenos Aires, Argentina; Cairo, Egypt; London,
	England.
	This time, create an associative array, using the countries as keys, the cities as values.
	Create a form for the user, with the instructions Please choose a city:
	Follow this request with a select field for the 10 cities, with the options creates by
	looping through the array. When the user clicks the submit button, return the
	statement $city is in $country., where $city is the value chosen by the user, and
	$country is its key-->


	<?php
	if(isset($_POST['sub'])){
		var_dump($_POST);

		$tmp = $_POST['countryArr'];
		print_r($tmp);

	}
	?>



	<br> ========================= LAB 3 QUESTION #5 ============================= . <br><br>


	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
	</head>
	<body>

		<!-- ARRAY THAT CONTAINS COUNTRIES AND CITIES -->
		<?php $countries = array("Tokyo"=>"Japan", "Mexico City,"=>" Mexico", " New York City"=>"USA",
		"Mumbai"=>"India", "Seoul,"=>"Korea", "Shanghai"=>"China",  "Lagos"=>" Nigeria", "Buenos Aires,"=>"Argentina","Cairo"=>"Egypt","London"=>"England");?>


		<h1 style="color: #4D86B1FF">Large cities again</h1> <!-- display header -->


		<!-- FORM INFORMATION (combo boxes)Open -->
		<form action="" method="POST">
			<label>Please choose a city</label><br><br>

			

			<!-- POPULATING COMBO BOX WITH FOREACH LOOP -->
			<select name="countryArr">
				<?php foreach ($countries as $key => $value){ ?>
					<option value="<?php echo $key ?>"><?php echo $key ?></option>
				<?php } ?>
			</select><br><br>
			<input type="submit" name="sub" value="Go">
		</form>
		<!-- FORM INFORMATION (combo boxes)Close -->

		<!-- <?php echo $countries[$_POST['countryArr']]; ?> GET INDEX OF ARRAY! -->




		<br><h1 style="color: #188539FF">Large cities again</h1>


		<?php if (isset($_POST['countryArr'])) {
			echo $tmp . " is in " . $countries[$_POST['countryArr']];
		} ?>

		
		

	</body>
	</html>


	



		<!-- //======  Retreive check box data from user/OPEN ======\\
			if (!empty($_POST['countryArr'])){
		
				// Retrieving each selected option
		            foreach ($_POST['countryArr'] as $key =>$value)
		                echo "(fill) is in $value <br/>";
		
		
		}
		//======  Retreive check box data from user/CLOSE ======\\ -->
		