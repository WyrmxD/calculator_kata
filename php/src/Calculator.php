<?php

class Calculator {
	
	static function add($string){
		$separators = '/[,|\s]/';
		$numbers = preg_split($separators, $string);
		
		$total = 0;
		foreach ($numbers as $number) {
			$total += $number;
		}
		return $total;
	}
}