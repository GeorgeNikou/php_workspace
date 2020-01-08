

	 <!--  This PHP exercise has two parts. In the first, you will take the large cities array 
	from Arrays Ex. #5 and transform it into a multi-dimensional array. That will become 
	the data in a table.-->



	<style type="text/css">
	td, th {width: 8em; border: 1px solid black; padding-left: 4px;}
	th {text-align:center;}
	table {border-collapse: collapse; border: 1px solid black;}
	</style>


	<br> ========================= LAB 3 QUESTION #7 ============================= . <br><br>

	Tokyo, Japan; Mexico City, Mexico; New York City, USA; Mumbai, India; Seoul, Korea; 
	Shanghai, China; Lagos, Nigeria; Buenos Aires, Argentina; Cairo, Egypt; London, 
	England


	
	<!-- MULTI-DIMENSIONAL ARRAY/OPEN -->
	<?php /* $multiCity = array
	(
		array("City","Country","Continent"),
		array("Tokyo", "Japan", "Asia"),
		array("Mexico City", "Mexico", "North America"),
		array("New York City", "USA", "North America"),
		array("Mumbai", "India", "Asia"),
		array("Seoul", "Korea", "Asia"),
		array("Shanghai", "China", "Asia"),
		array("Lagos", "Nigeria", "Africa"),
		array("Buenos Aires","Argentina", "South America"),
		array("Cairo", "Egypt", "Africa"),
		array("London", "UK", "Europe"),

	);var_dump($multiCity);*/ ?>
	<!-- MULTI-DIMENSIONAL ARRAY/CLOSE -->






	<?php 		
		/*echo "<table> <tr><th>" . $multiCity[0][0] . "</th><th>" . $multiCity[0][1] . "</th><th>" . $multiCity[0][2] . "</th></tr>";
		for ($i=1; $i < COUNT($multiCity); $i++) { 
			$arrays = $multiCity[$i];
			echo "<tr>";
			foreach ($arrays as $value) {
				echo "<td>" . $value . "</td>";				
			}			
			echo "</tr>";
		} 
		echo "</table>";
	*/


    $multiCity = array
	(		
		array("City"=>"Tokyo","Country"=>"Japan","Continent"=>"Asia"),
		array("City"=>"Mexico City","Country"=> "Mexico","Continent"=> "North America"),
		array("City"=>"New York City","Country"=> "USA","Continent"=> "North America"),
		array("City"=>"Mumbai","Country"=> "India","Continent"=> "Asia"),
		array("City"=>"Seoul","Country"=> "Korea","Continent"=> "Asia"),
		array("City"=>"Shanghai","Country"=> "China","Continent"=> "Asia"),
		array("City"=>"Lagos","Country"=> "Nigeria","Continent"=> "Africa"),
		array("City"=>"Buenos Aires","Country"=>"Argentina","Continent"=> "South America"),
		array("City"=>"Cairo","Country"=> "Egypt","Continent"=> "Africa"),
		array("City"=>"London","Country"=> "UK","Continent"=> "Europe"),
			
	);var_dump($multiCity); 


	echo "<table><tr>"; 

	foreach ($multiCity[0] as $key => $value) {
		echo "<th>" . $key . "</th>";
	}

	echo "</tr>";

	for ($i=0; $i < COUNT($multiCity); $i++) { 
		$arrays = $multiCity[$i];
		echo "<tr>";
		foreach ($arrays as $value) {
			echo "<td>" . $value . "</td>";				
		}			
		echo "</tr>";
	} 
	echo "</table>";

	






	?>






