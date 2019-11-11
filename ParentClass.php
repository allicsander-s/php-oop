<?php 

class ParentClass
{
	public function __construct()
	{
		 echo "construction function code called on a " . __CLASS__; 
	}

	public function doSomething()
	{
     return "doing something";
	}
}