<?php

class Calculator {
	
	static function add($string){
		$numbers = split(',', $string);
		
		$total = 0;
		foreach ($numbers as $number) {
			$total += $number;
		}
		return $total;
	}
}