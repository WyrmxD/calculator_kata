<?php

class Calculator {
	
	static function add($string){
		
		if (strstr($string, "//")){
			$separators = "/" . substr($string, 2, 1) . "/";
		} else {
			$separators = '/[,|\s]/';
		}
		$numbers = preg_split($separators, $string);			
		
		$total = 0;
		foreach ($numbers as $number) {
			$total += $number;
		}
		return $total;
	}
}