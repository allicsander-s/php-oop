<?php

class ChildClass extends ParentClass
{
  public function __construct()
  {
  	parent::__construct();
  	echo __CLASS__ . " has been instantiated";
  } 
}