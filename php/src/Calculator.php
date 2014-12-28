<?php

class Calculator {
	
	static function add($string){
		
		$separators = '/[,|\s]/';
		if (strstr($string, "//")){
			$separators = "/" . substr($string, 2, 1) . "/";
		}
		$numbers = preg_split($separators, $string);			
		
		$total = 0;
		foreach ($numbers as $number) {
			$total += $number;
		}
		return $total;
	}
}