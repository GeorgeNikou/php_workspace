<?php 
require_once "Cake.class.php";

class CupCake extends Cake{
	private $wrapping;
	private $quantity;


	/**
	 * Magic method to construct the class upon calling the keyword 'new'
	 * @param [integer] $height
	 * @param [integer] $radius
	 * @param [string] $color
	 * @param [string] $flavor
	 * @param [string] $wrapping
	 * @param [integer] $quantity
	 */
	public function __construct($height, $radius, $color, $flavor, $wrapping, $quantity){
		parent::__construct($height, $radius, $color, $flavor);
		$this->wrapping = $wrapping;
		$this->quantity = $quantity;
	}

	/**
	 * Magic method .. toString that convert the oject into a string and returns the description
	 * @return string [description]
	 */
	public function __toString(){
		$str = parent::__toString();
		$str .= "<b>Wrapping: </b>{$this->wrapping}<br>";
		$str .= "<b>Quantity: </b>{$this->quantity}<br>";
		return $str;
	}

	/*GETTERS AND SETTERS*/
    /**
     * @return mixed
    */
    public function getWrapping(){
        return $this->wrapping;
    }

    /**
     * @param mixed $wrapping
    */
    public function setWrapping($wrapping){
        $this->wrapping = $wrapping;
    }

    /**
     * @return mixed
    */
    public function getQuantity(){
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
    */
    public function setQuantity($quantity){
        $this->quantity = $quantity;
    }
}

