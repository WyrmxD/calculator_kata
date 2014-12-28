<?php

class CalculatorTest extends PHPUnit_Framework_TestCase {

	public function testAdd_empty_string(){
		$this->assertEquals(0, Calculator::add(''));
	}

	public function testAdd_one_number(){
		$this->assertEquals(1, Calculator::add('1'));	
	}
}