<?php

class Calculator {
	
	static function add($string){
		$values = split(',', $string);
		
		if (count($values) > 1) {
			return (intval($values[0]) + intval($values[1]) );
		}
		return intval($values[0]);
	}
}