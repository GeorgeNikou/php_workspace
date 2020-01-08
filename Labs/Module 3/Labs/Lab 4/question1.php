<?php
session_start();
if(isset($_POST['submit'])){
	$_SESSION['color'] = ($_POST['color']);
	var_dump($_SESSION);
}elseif(isset($_POST['reset'])){
	$_SESSION['color'] = "white";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lab4 - Question 1</title>

</head>
<body style="background-color: <?php echo $_SESSION['color'] ?>">

	<!-- LIST OF COLORS -->
	<h1>Color Picker</h1>

	<!-- CREATED FORM -->
	<form action="" method="POST">
		<input type="color" name="color" placeholder="type your color"><br><br>
		<input type="submit" name="submit" value="Change">
		<input type="submit" name="reset" value="Reset">
	</form>

	<?php if (isset($_POST['reset'])) {?>
		<!-- <body style="background-color: white"></body> -->
	<?php  } ?>



</body>
</html>