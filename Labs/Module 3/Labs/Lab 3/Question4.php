

 <!--  In this PHP exercise, you will create an array, print it to the browser, then ask the 
		user to add to it. 

		Create an array of modes of transportation, including Automobile, Jet, Ferry, Subway. 
		Print the following statement to the browser: "Travel takes many forms, whether across 
		town, across the country, or around the world. Here is a list of some common modes of 
		transportation:" Follow this with an unordered list created by iterating through the 
		array variable you created

		Next, give the user a text box and ask the user to add other modes of transportation to 
		the list, separated by commas. When the user clicks 'Go', process the input with array 
		functions to send back the original list with the user's additions. Include another text 
		box with the text "Add more?" and another submit button. When the user clicks this 
		button, the page should reload with the new additions added to the previously 
		expanded list. Your code should allow the user to add up to a limit of maximum 10 
		additions, so that the user can only add up to 10 new options to the list!-->

		<?php if(isset($_POST['subBtn'])){
			var_dump($_POST);

		}
		?>


		
		<br> ========================= LAB 3 QUESTION #4 ============================= . <br><br>


		<?php 
		$modeOfTrans = array("Automobile", "Jet", "Ferry", "Subway", "walking");// Array containing modes of transportation
		?>

		<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<title>Transportation</title>
		</head>
		<body>


			<h1 style="color: #F29B0CFF">How are you travelling?</h1>
			<p>Travel takes many forms, whether across town, across the country, or around the world.<br> Here is a list of some common modes of transportation: </p>

			





			<br><br>


			<!-- Form#1/OPEN -->
			<form action="" method="POST">

				<label style="font-weight: bold; color: " for="">Add</label><br><br>
				<input style="width: 500px; height: 30px; box-shadow: 2px 2px 2px" type="text" name="modes"><br><br>

				<input style="background-color: #29BD03FF; color: white;width: 150px;height: 30px;" type="submit" value="Go" name="subBtn">

			</form>
			<!-- Form#1/CLOSE -->


			<?php 

			if (isset($_POST['modes'])) {
			$tmp = $_POST['modes']; //assigning variable to input name
			$tmp = explode(',', $tmp); //converting string from textfield into an array (comma delimeter)

			if (COUNT($tmp) > 10) {
				echo "Limit of modes of tranportation given has surpassed 10. Please select fewer choices.<br><br>";
			}else{
				foreach ($tmp as $value) {
					$mod = array_push($modeOfTrans, $value);
				}
				echo "<br><br>";
				print_r($modeOfTrans);
				echo "<br><br>";

			}

		}

		?>

		

		<!-- Unordered List of modes of transportation/OPEN -->
		<?php 
		callList();
		?>
		<!-- Unordered List of modes of transportation/CLOSE -->

		
		

		<?php if (isset($_POST['modes2'])){?>
			<?php  $tmp2 = $_POST['modes2']; //assigning variable to input name?>
			<?php  $tmp2 = explode(',', $tmp2); //converting string from textfield into an array (comma delimeter)?>


			<?php if(COUNT($tmp2 > 10)) {
				echo "Limit of modes of tranportation given has surpassed 10. Please select fewer choices.<br><br>";
			}else{
				foreach ($tmp2 as $value) {
					$mod = array_push($modeOfTrans, $value);
				}
			}	
			?>
			<form action="" method="POST">
				<br><br>
				<label style="font-weight: bold; color: " for="">Add more?</label><br><br>
				<input style="width: 500px; height: 30px; box-shadow: 2px 2px 2px" type="text" name="modes2"><br><br>

				<input style="background-color: #A40306FF; color: white;width: 150px;height: 30px;" type="submit" value="Go" name="subBtn2">

			</form> <?php  
		}?>
		

		




		<?php 
		function callList(){
			global $modeOfTrans;
			for ($i=0; $i < COUNT($modeOfTrans); $i++) 
				echo "<li> {$modeOfTrans{$i}} </li>";	
		}
		?>




	</body>
	</html>