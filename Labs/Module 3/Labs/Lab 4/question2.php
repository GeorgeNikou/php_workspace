		<?php 	
			$cookieName = "count";

			if(!isset($_COOKIE[$cookieName])) {     
			    $cookieValue = 1;
			} else {
			    $cookieValue = $_COOKIE[$cookieName] + 1;
			    if($_COOKIE[$cookieName] == 5){
			    	echo "5";
				}else if($_COOKIE[$cookieName] == 10){
					echo "10";
				}else if($_COOKIE[$cookieName] == 15){
					echo "15";
				}else if($_COOKIE[$cookieName] == 20){
					$cookieValue = 0;
				}
			}
			setcookie($cookieName, $cookieValue);			
		?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>lab4-question2</title>
	</head>
	<body>
		<?php 
			if(!isset($_COOKIE[$cookieName])) {     
		    	echo "Number of cookie monsters: " . 0;
			} else {
			    echo "Number of cookie monsters: " . $_COOKIE[$cookieName];
			}		
		?>
	</body>
	</html>