<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lecture 1 - Files RW</title>
</head>
<body>
<?php

/*
	TO READ A FILE
	we need to all fopen(filenamepath, mode)
	arg1: path of the file with it's name
	arg2: mode (r: reading,  w: writing, a+:reading and writing)
	returns false if no file is found
*/
$file = fopen("test.txt", "r");
$people = array();

//feof : find the end of the file (go through the each line of my file until the end)
//fgets : return a given line in the file (resource streem)
while(!feof($file))
	$people[] = explode("|",trim(fgets($file)));

var_dump($people);

//close the open streem to avoid buffer overflowing
fclose($file);

//Word txt file
$file = fopen("words.txt", "r");
$words = array();

while(!feof($file))
	$words[] = trim(fgets($file));

fclose($file);

$r = rand(0, COUNT($words)-1);
$str = $words[$r];
echo "Random Word: " . $str;


/*
	TO WRITE INTO A FILE
	fopen: to create or read a file (path, mode)
	if the file exist, it will create else it will read from it (append to it)
	arg1: file path with the name of the file
	arg2: 	a+ (reading and writing and place the cursor at the end)
			w+ (reading and writing and place the cursor at the begining)
*/
$myFile = fopen("myfile.txt", "a+") or die("file doesn't exist");
fwrite($myFile, $str."\r");
fclose($myFile);



$user = array(
		      'name' 	=> 'Mulan',
		      'age' 	=> '16',
		      'gender'	=> 'female',
		      'location'=> 'Ottawa'
		  );


$myFile = fopen("test.txt", "a+") or die("file doesn't exist");
fwrite($myFile, json_encode($user)."\r");
fwrite($myFile, serialize($user)."\r");
fclose($myFile);

?>
</body>
</html>