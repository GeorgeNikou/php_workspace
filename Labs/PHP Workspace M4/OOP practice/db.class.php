<?php 

class db{

	private $db_storage = array();


	public function __construct($db_storage){
		foreach ($db_storage as $key => $value)
				 $this->{$key} = $value;
	}
}

?>