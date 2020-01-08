<!-- Write a program to calculate the revenue from a sale based on the unit price and quantity of a product saved 
	 variables. The discount rate is 10% for the quantity purchased between 100 and 120 units, and 15% for the 
	 quantity purchased greater than 120 units. If the quantity purchased is less than 100 units, the discount rate is 
	 0%. See the example output as shown below: 
	• Unit price: 25 
	• Quantity: 110 
	• The revenue from sale: 2475.0$ 
	• After discount: 275.0$(10.0%)  -->


	<?php 
	//===================================\\
	/*Vairable declarations*/
	//===================================\\
	$unitPrice = 25;
	$quantity = 110;
	$totalSale = ($unitPrice * $quantity);
	$discount = 0;
	$priceWithDiscount = 0; //final price with discount included

	echo "<br> ========================= LAB 1 QUESTION #2 ============================= " . "<br><br>";


	//===================================\\
	/*Checking for discounts*/
	//===================================\\
	if ($quantity >= 100 && $quantity <=120){
		$discount = ($totalSale * .10);
		$priceWithDiscount = ($totalSale - $discount); // subtracting the discount to the total price 

		echo "Discount available: " . 10 . "%" . "<br>";
		echo "The unit price: " . " $" . $unitPrice . " dollars." . "<br>";
		echo "The quantity: " . $quantity . ".<br>";
		echo "The total price without the discount: " . "$" . $totalSale . " dollars." . "<br>";
		echo "The discounted price available: " . " $" . $discount .  " dollars." . "<br>";
		echo "The total price with the discount included: " . " $" . $priceWithDiscount . " dollars." . "<br>";
		
		
	}elseif ($quantity > 120){
		$discount = ($totalSale * .15);
		$priceWithDiscount = ($totalSale - $discount); // subtracting the discount to the total price 

		echo "Discount available: " . 15 . "%" . "<br>";
		echo "The unit price: " . " $" . $unitPrice . " dollars." . "<br>";
		echo "The quantity: " . $quantity . ".<br>";
		echo "The total price without the discount: " . "$" . $totalSale . " dollars." . "<br>";
		echo "The discounted price available: " . " $" . $discount .  " dollars." . "<br>";
		echo "The total price with the discount included: " . " $" . $priceWithDiscount . " dollars." . "<br>";

	}elseif ($quantity < 100){
		echo "NO DISCOUNT AVAILABLE!" . "<br>";
		echo "The unit price: " . " $" . $unitPrice . " dollars." . "<br>";
		echo "The quantity: " . $quantity . ".<br>";
		echo "The total price without the discount: " . "$" . $totalSale . " dollars." . "<br>";
		echo "The discounted price available: " . " $" . $discount .  " dollars." . "<br>";
		echo "The total price with the discount included: " . " $" . $priceWithDiscount . " dollars." . "<br>";

	}

	?>


