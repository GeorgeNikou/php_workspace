
<!-- 10. Write a PHP script that creates the following table (use for loops) -->


<?php

echo "<br> ========================= LAB 1 QUESTION #10 ============================= " . "<br><br>";


 echo "<table border =\"1\" style='border-collapse: collapse'>"; //creating the border outline
 	for ($row=1; $row <= 10; $row++) {  // first loop
 		echo "<tr> \n";
		for ($col=1; $col <= 10; $col++) { //2nd loop
  		$p = $col * $row; //computing values
  		echo "<td>$p</td> \n";
  	}
  	echo "</tr>";
  }
		echo "</table>"; //closing the table
		
?>