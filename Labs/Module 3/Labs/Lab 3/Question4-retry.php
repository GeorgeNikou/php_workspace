

 <!-- In this PHP exercise, you will create an array, print it to the browser, then ask the 
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


	<?php 		

	if(isset($_POST['modes'])){
		$modeOfTrans = explode(',', $_POST['oldValues']);
		array_push($modeOfTrans, $_POST['modes']);
	}else{
		$modeOfTrans = ['Automobile', 'Jet', 'Ferry', 'Subway', 'walking'];
		
	}
	?>

	<?php 		

	if(isset($_POST['modes2'])){
		$modeOfTrans2 = explode(',', $_POST['oldValues2']);
		array_push($modeOfTrans, $_POST['modes2']);	
	}else{
		/*$modeOfTrans = ['Automobile', 'Jet', 'Ferry', 'Subway', 'walking'];*/

		
	}
	?>

	<br> ========================= LAB 3 QUESTION #4 ============================= . <br><br>



	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Lab3 Q4-retry</title>
	</head>
	<body>
		<ul>
			<!-- Display the list -->
			<?php foreach ($modeOfTrans as $value): ?>
				<li><?= $value ?></li>
			<?php endforeach ?>
		</ul>


		<!-- Form#1/OPEN -->
		<form action="" method="POST">
			<input type="hidden" name="oldValues" value="<?= implode(',', $modeOfTrans) ?>">
			<label style="font-weight: bold; color: " for="">Add</label><br><br>
			<input style="width: 500px; height: 30px; box-shadow: 2px 2px 2px" type="text" name="modes"><br><br>
		<!-- condition allowed for up to 15 listed modes of trans -->
			<?php 
			if(COUNT($modeOfTrans) >= 15){
				echo "<input type='hidden' name='oldValues2' value='<?= implode(',', $modeOfTrans2) ?>";
				echo "<h4 style='color:red'> Too many modes listed already</h4>";
				echo "<input type='text' name'modes2'>" . "<br><br>"; //display new input field
				echo "<input style='font-weight:bold'; type='submit' value='add more'>";
			}else{?>
				<input style="background-color: #29BD03FF; color: white;width: 150px;height: 30px;" type="submit" name=go value="Go">
			<?php }?>
			

			
		</form>
		<!-- Form#1/CLOSE -->



	</body>
	</html>



