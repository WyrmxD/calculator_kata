<?php

class Calculator {
	
	static function add($string) {

		$numbers = self::splitter($string);			
		
		$total = 0;
		foreach ($numbers as $number) {
			$total += $number;
		}
		return $total;
	}

	private function splitter($string) {
		$separators = '/[,|\s]/';
		if (strstr($string, "//")){
			$separators = "/" . substr($string, 2, 1) . "/";
		}
		return preg_split($separators, $string);
	}
}