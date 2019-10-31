<?php
/**
 * this is my splendid Math class for different  oop demos
 * @author Sasha <allicsander@example.com>
 * @copyright 2019
 * @license gnu free
 */
class Math{
  
  /**
   * Add as many arguments (ints) as you wish, and this method will calculate the sum  
   * @return int the sum of all the arguments
   */
 function add(){
 	 $args = func_num_args();
 	 $sum = 0;
 	 $i = 0;

 	 for ($i; $i < $args; $i++) { 
 	 	 is_int(func_get_arg($i)) ? $sum += func_get_arg($i) : die("only integers , por favor");
 	 }
 
 return $sum;
 }


}