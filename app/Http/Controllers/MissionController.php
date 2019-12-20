<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MissionController extends Controller
{
	// String to change it 
	 protected $str="hello world";	
	
	// Array $a is multiple arrays to pass as a parameter to the method		
	// you can change it provide another array to test the method
	 protected $a=array(1,2,array(3,4,array(5,6,array(5))));			
	
	 /**
     * Execute method array_sums and show results in view.
     *
     * @return \Illuminate\Http\Response
     */
    public function mission_1()
    {
		  echo "<h3>The sum of the values in this array </h3> <br>";
		  print_r($this->a);
		 echo "<h3>->  ". $this->array_sums($this->a)."</h3>" ;
    }

	
	
	 /**
     * Execute method array_sums and show results in view.
     *
     * @return \Illuminate\Http\Response
     */
    public function mission_2()
    {
		  echo "<h3>".$this->str." --->  ".$this->string_replace($this->str) ."</h3>";
    }
	
	
	
	
	
    /**
     * Calculate the sum of multiple arrays .
	 * @param  array of ints $array
     * @return int the sum of the values in the $array 
     */
	public function array_sums($array) {
	   $sum_temp=0;
	   $a_temp=array();
		for ($i = 0; $i < sizeof($array) ; $i++) {
			if(is_array($array[$i])){
				$sum_temp=$this->array_sums($array[$i]); // Recall to the current method
				array_push($a_temp,$sum_temp);
			}
			else{
			 array_push($a_temp,$array[$i]);	
			}
		}
		return array_sum($a_temp);//
    }
	
	 /**
     * reverse string and replace space character by '_' .
	 * @param String $str
     * @return String 
     */
	public function string_replace($str) {
	    $parts = explode(" ", $str);
		return $parts[1]."_".$parts[0];
		
    }
	
  
}

