<?php

class House{
	public $primaryColor = 'black';
	public $width 	= 100;
	public $height 	= 200;
	public $length 	= 150;
	public $address = "123 Lame Street";
	public $hasPool = true;
	public $roomsColors = array(
									"bedroom" 	=> "white",
									"bathroom" 	=> "skyblue",
									"kitchen" 	=> "pink"
								);

	function getDesc(){
		$str = "";
		$str .= "Primary Color: " . $this->primaryColor . "<br>";
		$str .= "Width: " . $this->width . "<br>";
		$str .= "Height: " . $this->height . "<br>";
		$str .= "Length: " . $this->length . "<br>";
		$str .= "Address: " . $this->address . "<br>";
		$str .= "HasPool: " . ($this->hasPool?'Yes':'No') . "<br>";
		$str .= "Room Colors: <br>";

		foreach ($this->roomsColors as $room => $color)
			$str .= ucfirst($room) . " : $color<br>";

		return $str;
	}

	function setRoomsColors($roomArray){
		$this->roomsColors = $roomArray;
	}
}