<?php 
include "User.class.php";

/*var_dump(add_user($array3, $db));*/
/*$db[] = add_user($array1, $db);
$db[] = add_user($array2, $db);
$db[] = add_user($array3, $db);*/

/*$db = array();
$array1 = array("firstname"=>"George","lastname"=>"Nikou","email"=>"george.nikou05@gmail.com","password"=>"M3n555");
$array2 = array("firstname"=>"Jacob","lastname"=>"elis","email"=>"Jay.cob@gmail.com","password"=>"jjab4ms123");
$array3 = array("firstname"=>"Lisa","lastname"=>"Williams","email"=>"Lis.wil@gmail.com","password"=>"lislis234");


$db[] = $array1;
$db[] = $array2;
$db[] = $array3;

var_dump($db);*/
$db = array();
$db[] = array("a","b","c");
$db[] = array("d","e","f");


find($db,"w");




function find($arr, $g){
	for ($i=0; $i < COUNT($arr); $i++) { 
		for ($j=0; $j < COUNT($arr[$i]); $j++) { 
			if($arr[$i][$j] == $g){
				echo "found it";
			}
		}
	}
}


function add_user($array, $vanila){
	$p1 = new User($array);
	array_push($vanila,$p1->getFirstname());
	return $vanila;
}

?>