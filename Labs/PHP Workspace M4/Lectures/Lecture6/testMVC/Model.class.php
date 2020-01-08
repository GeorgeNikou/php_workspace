<?php 
class Model{
	private $msg;
	private $num1;
	private $num2;

	public function __construct(){
		$this->msg = "hello world";
	}

	public function multiply(){
		return $this->num1 * $this->num2;
	}

    public function getMsg(){
        return $this->msg;
    }

    public function setMsg($msg){
        $this->msg = $msg;
        return $this;
    }

    public function getNum1(){
        return $this->num1;
    }

    public function setNum1($num1){
        $this->num1 = $num1;
        return $this;
    }

    public function getNum2(){
        return $this->num2;
    }

    public function setNum2($num2){
        $this->num2 = $num2;
        return $this;
    }
}

 ?>