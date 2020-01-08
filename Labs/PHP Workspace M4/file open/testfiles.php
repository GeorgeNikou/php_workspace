<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>files open</title>
</head>
<body>
	<?php
	$file = fopen("test.txt","r");
	$people = array();


	while(!feof($file)){
		$people[] = explode("|",trim(fgets($file)));
	}
	fclose($file);


	$file2 = fopen("words.txt","r");
	$people2 = array();

	while(!feof($file2)){
		$people2[] = fgets($file2);
		$random_index = array_rand($people2);
	}
	fclose($file2);

	/*var_dump($people2[$random_index]);*/

	$myFile = fopen("myFile.txt","a+") or die("this file doesn't exist");
	fwrite($myFile, $people2[$random_index]);
	



	$arr = array( "name" 	=> "Tim",
					"age" 	=> 32,
				"gender" 	=> "female"
	);


	$myFile = fopen("test.txt","a+") or die("this file doesn't exist");
	fwrite($myFile, serialize($arr));
	fclose($myFile);

	?>
</body>
</html>