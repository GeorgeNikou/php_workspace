<?php 

var_dump($_GET);

echo decrypt($_GET['user']);



function decrypt($str){
	$decr = strrev($str);
	$decr = str_replace(array("b64Y", "24BGT"), "", $decr);
	$decr = base64_decode($decr);
	$decr = str_rot13($decr);

	return $decr;
}

 ?>