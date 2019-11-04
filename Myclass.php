<?php

class Myclass 
{
  private $_var = 'my value qq'; 

  private function _conc()
  {
  	echo "<br>";
  }


  public function show()
  { 
  	$this->_conc();
  	echo $this->_var;
  }
}