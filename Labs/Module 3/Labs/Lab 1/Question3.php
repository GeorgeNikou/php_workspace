<?php 


/*  Write a program to determine the cost of an automobile insurance premium, based on driver's age and the 
	number of accidents that the driver has had. All variables.
	o The basic insurance charge is $500. There is a surcharge of $100 if the driver is under 25 and an additional 
	surcharge for accidents: 
	 # of accidents Accident Surcharge
	 1 → 25 
	 2 → 25 
	 3 → 75 
	 4 → 75 
	 5 → 100 
	 6 or more → No insurance*/


	echo "<br> ========================= LAB 1 QUESTION #3 ============================= " . "<br><br>";

	$basicPackage = 500;
	$underAge = 100;
	$age = 56;
	$finalCost = 0;
	$accidents = 4;


	if($age < 25){

		$basicPackage =	($basicPackage + $underAge);
		if ($accidents > 0 && $accidents <= 2){
			$basicPackage += 25;
			echo "Package estimate: " . "$" .$basicPackage . " dollars.";

		}elseif ($accidents >= 3 && $accidents <= 4){
			$basicPackage += 75;
			echo "Package estimate: " . "$" .$basicPackage . " dollars.";

		}elseif ($accidents == 5){
			$basicPackage += 100;
			echo "Package estimate: " . "$" .$basicPackage . " dollars.";
		}else{
			echo "Im sorry you are not eligible for an insurance premium plan.";
		}
	}else{

		if ($accidents > 0 && $accidents <= 2){
			$basicPackage += 25;
			echo "Package estimate: " . "$" .$basicPackage . " dollars.";

		}elseif ($accidents >= 3 && $accidents <= 4){
			$basicPackage += 75;
			echo "Package estimate: " . "$" .$basicPackage . " dollars.";

		}elseif ($accidents == 5){
			$basicPackage += 100;
			echo "Package estimate: " . "$" .$basicPackage . " dollars.";
		}else{
			echo "Im sorry you are not eligible for an insurance premium plan.";
		}
		
	}




	?>