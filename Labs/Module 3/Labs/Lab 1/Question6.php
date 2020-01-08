<!-- Write a program called CozaLozaWoza which prints the numbers 1 to 110, 11 numbers per line. The 
	program shall print "Coza" in place of the numbers which are multiples of 3, "Loza" for multiples of 5,
	"Woza" for multiples of 7, "CozaLoza" for multiples of 3 and 5, and so on. 
	The output shall look like:

	1 2 Coza 4 Loza Coza Woza 8 Coza Loza 11 
	Coza 13 Woza CozaLoza 16 17 Coza 19 Loza CozaWoza 22 
	23 Coza Loza 26 Coza Woza 29 CozaLoza 31 32 Coza -->


	<?php 

	echo "<br> ========================= LAB 1 QUESTION #6 ============================= " . "<br><br>";

	for ($i=1; $i <= 110; $i++) { 

		// ======== MULTIPLES OF 3 AND 5 ========= \\
		if ($i % 3==0 & $i % 5==0) {
			echo " CozaLoza ";

		// ========== MULTIPLES OF 3  ============ \\
		}elseif ($i % 3==0){
			echo " Coza ";

		// ========== MULTIPLES OF 5 ============ \\
		}elseif ($i % 5==0){
			echo " Loza ";
			
		// ========== MULTIPLES OF 7 ============ \\
		}elseif ($i % 7==0){
			echo " Woza ";
		}else{
			echo $i . "&nbsp";
		}
		if ($i % 11==0){ // 11 characters per column
			echo "<br>";
		}
	}

	?>