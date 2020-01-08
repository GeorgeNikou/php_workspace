
<?php
session_start();



if(isset($_POST['confirm'])){
	var_dump($_SESSION);
}

if(isset($_POST['previous'])){
	header("location: question3.php");
}elseif(isset($_POST['confirm'])){
	header("location: question3-b.php");
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<style>
	
	.reciept{
		padding: 100px;
		height: 145px;
		border: 1px solid black;
		margin-right: 999px;
	}

	label{
		display: inline-block;
		float: left;
		clear: left;
		width: 250px;
		text-align: right;
	}
	input {
		padding: 2px;
		margin-left: 10px;
		display: inline-block;
		float: left;
	}
</style>
</head>
<body>
	<div class="reciept">
		<form action="" method="POST">


			<label for=""><?php if(isset($_SESSION['hotdog']))
			echo $_SESSION['hotdog'] . " hotdogs"?> </label>

			<label for=""><?php if(isset($_SESSION['hamburger']))
			echo $_SESSION['hamburger'] . " hamburger"?> </label>

			<label for=""><?php if(isset($_SESSION['fries']))
			echo $_SESSION['fries'] . " fries"?> </label>

			<label for=""><?php if(isset($_SESSION['chicken']))
			echo $_SESSION['chicken'] . " chicken sandwich"?> </label>

			<label for=""><?php if(isset($_SESSION['soda']))
			echo $_SESSION['soda'] . " soda"?> </label>

			<label for=""><?php if(isset($_SESSION['pizza']))
			echo $_SESSION['pizza'] . " piza slice"?> </label><br>
			


			<br><input type="submit" name="previous" value="previous">
			<input type="submit" name="confirm" value="check out">

		</form>
	</div>
</body>
</html>
