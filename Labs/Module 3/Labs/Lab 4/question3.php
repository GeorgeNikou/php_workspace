

<?php 
session_start();

if(isset($_POST["submit"])){

	$total = 0;	
	if($_POST['dog'] != null){
		$total = $total + $_POST['dog'];
		$_SESSION['hotdog'] = $_POST['dog'];
	}
	if($_POST['hamburger'] != null){
		$total = $total + $_POST['hamburger'];
		$_SESSION['hamburger'] = $_POST['hamburger'];
	}
	if($_POST['fries'] != null){
		$total = $total + $_POST['fries'];
		$_SESSION['fries'] = $_POST['fries'];
	}
	if($_POST['chicken'] != null){
		$total = $total + $_POST['chicken'];
		$_SESSION['chicken'] = $_POST['chicken'];
	}
	if($_POST['soda'] != null){
		$total = $total + $_POST['soda'];
		$_SESSION['soda'] = $_POST['soda'];
	}		
	if($_POST['pizza'] != null){
		$total = $total + $_POST['pizza'];
		$_SESSION['pizza'] = $_POST['pizza'];
	}
	if($total < 2){
		echo "<span style='color:red'> You must purchase more than two items from the list of items </span>";
	}else{
		header("location: question3-a.php"); 
	}
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

		<!-- <?php echo "Qtn: " . $_SESSION['hotdog'] ?> -->

		<form action="" method="POST">
			<label for="">Hot dog: 1.65$</label>
			<input type="number" name="dog"><br>
			<label for="">Hamburger: 2.50$</label>
			<input type="number" name="hamburger"><br>
			<label for="">Fries: 1.15$</label>
			<input type="number" name="fries"><br>
			<label for="">Chicken sandwich: 3.75$ </label>
			<input type="number" name="chicken"><br>
			<label for="">Soda: 1$</label>
			<input type="number" name="soda"><br>
			<label for="">Pizza slice: 2$</label>
			<input type="number" name="pizza"><br><br><br>
			<label style="margin-left: 40px;" for="">Remember my order</label>
			<input type="checkbox" name="remember">



			<input type="submit" name="submit">
		</form>
	</div>
	
</body>
</html>