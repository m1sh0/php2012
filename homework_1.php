<?php

function debug($var) {
$dumped = var_export($var, true);
file_put_contents("dump.txt", $dumped);
echo "<pre>";
var_dump($var);
echo "</pre>";
}

function isPrime($var) {
	for( $i = 2; $i<$var; $i++) {
		if($var % $i == 0)
			return false;	
	}
	return true;
}

if (!is_numeric($_GET["number"])) {
	echo "<font color=\"red\">The parameter is not a number!</font>";
}
else {
	if($_GET["number"] > 19999 || $_GET["number"] < 0) {
		echo "<font color=\"red\">The parameter is not within the range [0,19999]</font>";	
	}
	else {
		if(isPrime($_GET["number"])) {
			echo "<font color=\"blue\">The parameter is prime!</font>";		
		}
		else {
			echo "<font color=\"blue\">The parameter is not prime!</font>";
		}	
	}
}
