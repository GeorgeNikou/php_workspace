<?php
	/*require_once "CupCake.class.php";
	require_once "Cake.class.php";
	require_once "Functions.class.php";
	require_once 'ParentClass.class.php';*/

	spl_autoload_register(function ($class_name) {
	    require_once $class_name . '.class.php';
	});

	$c1 = new Cake(5, 10, "Brown", "Choco Nanaimo");
	$c2 = new Cake(15, 20, "Red", "Red Velvet");
	$c3 = new Cake(20, 20, "White", "Cheesecake");

	echo $c1 . "<br>";
	echo $c2 . "<br>";
	echo $c3 . "<br>";

	$rev = Cake::cakeRevenue(25);

	echo "How many cakes sold so far : " .  Cake::$count . "<br>";
	echo "Revenue : $" . $rev . "<br>";
	echo "Total with Taxes: $" . Functions::calculateTax(floatval($rev));

	echo "<br><br>";

	$cc1 =  new CupCake(2,2, "Orange", "Carrot Cake", "WaxPaper", 12);
	$cc1->setColor("Dark Orange");
	echo $cc1 . "<br>";
	echo "How many cakes and cupcake sold so far : " .  Cake::$count . "<br>";

	$test1 = new Subclass();

	$obj = new MyClass();

?>