<?php
class Controller{
	private $model;

	public function __construct($model){
		$this->model = $model;
	}

	public function setMessage($msg){
		$this->model->setMsg($msg);
	}

	public function getMessage(){
		return $this->model->getMsg();
	}

	public function setMultiply($num1, $num2){
		$this->model->setNum1($num1);
		$this->model->setNum2($num2);
	}

	public function getResult(){
		return $this->model->multiply();
	}
}

 ?>