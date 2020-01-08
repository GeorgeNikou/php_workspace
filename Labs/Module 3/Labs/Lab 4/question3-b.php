
<?php
session_start();



if(isset($_POST['confirm'])){
	var_dump($_SESSION);
}

if(isset($_POST['previous'])){
	header("location: question3-a.php");
}elseif(isset($_POST['confirm'])){
	header("location: question3.php");
	session_destroy();
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

			<?php 
			$tot = 0;
			/*$hotdog =  ($_SESSION['hotdog'] * 1.65);
			$hamburger =  ($_SESSION['hamburger'] * 2.50);
			$fries =  ($_SESSION['fries'] * 1.15);
			$chicken =  ($_SESSION['chicken'] * 3.75);
			$soda =  ($_SESSION['soda'] * 1);
			$pizza =  ($_SESSION['pizza'] * 2);
			$total = ($hotdog+$hamburger+$fries+$chicken+$soda+$pizza);*/

			if(isset($_SESSION['hotdog']) != null){
				$hotdog =  ($_SESSION['hotdog'] * 1.65);
				$tot+= $hotdog;
			}
			if(isset($_SESSION['hamburger'])!= null){
				$hamburger =  ($_SESSION['hamburger'] * 2.50);
				$tot+= $hamburger;
			}
			if(isset($_SESSION['fries'])!= null){
				$fries =  ($_SESSION['fries'] * 1.15);
				$tot+= $fries;
			}
			if(isset($_SESSION['chicken'])!= null){
				$chicken =  ($_SESSION['chicken'] * 3.75);
				$tot+= $chicken;
			}
			if(isset($_SESSION['soda'])!= null){
				$soda =  ($_SESSION['soda'] * 1);
				$tot+= $soda;
			}
			if(isset($_SESSION['pizza'])!= null){
				$pizza =  ($_SESSION['pizza'] * 2);
				$tot+= $pizza;
			}
			echo "TOTAL: " . $tot . " dollars$";
			var_dump($tot);
			?>
			
			

			<br><input type="submit" name="previous" value="previous">
			<input type="submit" name="confirm" value="confirm order">

		</form>
	</div>
</body>
</html>
