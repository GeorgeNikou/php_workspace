<!--  Using for loops create the following image: -->



<?php  
echo "<br> ========================= LAB 2 QUESTION #6 ============================= " . "<br><br>";
?>

<!DOCTYPE html>
<html> 
<head> 
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body> 

	<br><br>
	<h3 style="color: red; font-weight: bolder;">"MAGENTA EXPRESS CHESS BOARD"</h3>
	<table width="270px" cellspacing="0px" cellpadding="0px" border="1px"> <!-- styling the table -->
		<!-- cell 270px wide (8 columns x 60px) -->
		<?php
		for($row=1;$row<=8;$row++) //creating 8 rows for the chess board
		{
			echo "<tr>";
			for($col=1;$col<=8;$col++) //creating 8 columns for the chess board
			{
				$total=$row+$col;
				if($total%2==0) { //condition to make every EVEN pos box colored
					echo "<td height=30px width=30px bgcolor=#F00EB6></td>";
				}
				else {
					echo "<td height=30px width=30px bgcolor=#000000></td>";
				}
			}
			echo "</tr>";
			// end of table row
		}
		?>
	</table>
</body>
</html>