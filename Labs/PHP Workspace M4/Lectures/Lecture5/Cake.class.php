<?php
/**
 * @description 	: This class will handle my cakes
 * @author George Boursiquot <bgeorgealdly@gmail.com>
 * @lastmodified 30/05/2019
 * @version 1.0
 * @web <george.com>
 * @copyright herzing college montreal
 */

class Cake{
	//class properties
	private $height;
	private $radius;

	protected $color;
	protected $flavor;

	public static $count = 0;


	/**
	 * Magic method to construct the class upon calling the keyword 'new'
	 * @param [integer] $height
	 * @param [integer] $radius
	 * @param [string] $color
	 * @param [string] $flavor
	 */
	public function __construct($height, $radius, $color, $flavor){
		$this->height 	= $height;
		$this->radius 	= $radius;
		$this->color 	= $color;
		$this->flavor 	= $flavor;

		//incrementing the counter each time an oject is initialized
		self::$count += 1;
	}

	/**
	 * Magic method .. toString that convert the oject into a string and returns the description
	 * @return string [description]
	 */
	public function __toString(){
		$str = "";
		$str .= "<b>Class: </b>".get_class($this)."<br>";
		$str .= "<b>Height: </b>{$this->height}\"<br>";
		$str .= "<b>Radius: </b>{$this->radius}\"<br>";
		$str .= "<b>Color: </b>{$this->color}<br>";
		$str .= "<b>Flavor: </b>{$this->flavor}<br>";
		return $str;
	}


	/** GETTERS AND SETTERS **/

    /**
     * @return mixed
     */
    public function getHeight(){
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height){
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getRadius(){
        return $this->radius;
    }

    /**
     * @param mixed $radius
    */
    public function setRadius($radius){
        $this->radius = $radius;
    }

    /**
     * @return mixed
    */
    public function getColor(){
        return $this->color;
    }

    /**
     * @param mixed $color
    */
    public function setColor($color){
        $this->color = $color;
    }

    /**
     * @return mixed
    */
    public function getFlavor(){
        return $this->flavor;
    }

    /**
     * @param mixed $flavor
    */
    public function setFlavor($flavor){
        $this->flavor = $flavor;
    }

    /**
     * static function to return revenue from my cake
     * @param  [float] $price
     * @return [string] calculation
     */
    public static function cakeRevenue($price){
    	return number_format((self::$count * $price), 2);
    }

}