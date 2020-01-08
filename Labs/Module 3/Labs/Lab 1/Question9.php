
<!--  . Write a PHP script that creates the following table using for loops.  -->



	<?php 

	echo "<br> ========================= LAB 1 QUESTION #9 ============================= " . "<br><br>";

	$times = "*";
	$equal = "=";

 		echo "<table border =\"1\" style='border-collapse: collapse; color: gray; border: 2px solid black; box-shadow: 6px 8px lightgray'>"; //creating the border outline
 			for ($row=1; $row <= 6; $row++) {  // first loop
 				echo "<tr> \n";
				for ($col=1; $col <= 5; $col++) { //2nd loop
  				$p = $col * $row; //computing values
  				echo "<td>$row $times $col $equal $p</td> \n";
  			}
  			echo "</tr>";
  		}
		echo "</table>"; //closing the table
		
		?>