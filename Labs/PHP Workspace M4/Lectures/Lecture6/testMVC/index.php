<?php
	spl_autoload_register(function ($class_name) {
	    require_once $class_name . '.class.php';
	});

	$m = new Model();
	$c = new Controller($m);
	$v = new View($m, $c);

	//$c->setMessage("Hello Herzing!");
	//$v->display();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MVC1</title>
</head>
<body>
	<form action="" method="POST">
		<input type="number" name="num1" placeholder="number 1"> x <input type="number" name="num2" placeholder="number 2">
		<input type="submit" name="equal">
	</form>
	<?php
		if(isset($_POST['equal'])){
			$c->setMultiply($_POST['num1'], $_POST['num2']);
	 		$v->result();
		}
	?>
</body>
</html>