<?php

class Calculator {
	
	static function add($string) {

		$numbers = self::splitter($string);
		if (!self::positive($numbers)) {
			throw new InvalidArgumentException("Negative numbers not allowed", 1);
		}
		
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

	private function positive($numbers) {
		foreach ($numbers as $number) {
			if ($number < 0) {
				return false;
			}
		}
		return true;
	}
}