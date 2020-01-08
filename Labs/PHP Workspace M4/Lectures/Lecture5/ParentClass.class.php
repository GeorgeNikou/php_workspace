<?php

abstract class ParentClass {
	abstract public function myMethod1();
	abstract protected function myMethod2($name, $age);
	abstract protected function myMethod3() : int;

	private function test(){
		echo "please work!!!";
	}
}