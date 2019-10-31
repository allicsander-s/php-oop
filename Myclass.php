<?php

class Myclass {

	public $name;

	function __construct($name){
     $this->name = $name;
     echo $this->name;
	}

	function doSomethingBeautiful(){
		echo 'doing something'; 
	}
}