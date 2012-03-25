<?php

	$arr = range(20, 1000, 37);
	function isPrime($var) {
		for( $i = 2; $i<$var; $i++) {
			if($var % $i == 0)
				return false;	
		}
		return true;
	}
	
	function find_3_prime() {
		$count = 0;
		global $arr;
		foreach($arr as $value) {
			if(isPrime($value)) {
				$count++;
				if($count == 3){
					echo $value;
					return;
				}
			}
		}
	}
	
	find_3_prime();
	
	function check_exists($arrs) {
		$numbers = array(146, 284, 871);
		
		foreach($numbers as $number) {
			$isExsist = false;
			foreach($arrs as $value) {
				if($number == $value) 
					$isExsist = true;
			}
			if($isExsist) {
				echo "The number ";
				echo $number ;
				echo " exist in the array";
			}
			else {
				echo "The number "; 
				echo $number ; 
				echo " does not exist in the array";
			}
			echo "</br>";
		}
	}
	
	
	echo "</br>";
	check_exists($arr);
	