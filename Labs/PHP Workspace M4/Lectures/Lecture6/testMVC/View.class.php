<?php
	class View{
		private $model;
		private $controller;

		public function __construct($model, $controller){
			$this->model 		= $model;
			$this->controller 	= $controller;
		}

		public function display(){
			echo "<h1>{$this->controller->getMessage()}</h1>";
		}

		public function result(){
			echo "<h1>{$this->controller->getResult()}</h1>";
		}
	}
?>