<?php

class CalculatorTest extends PHPUnit_Framework_TestCase {

	public function testAdd_empty_string(){
		$this->assertEquals(0, Calculator::add(''));
	}

	public function testAdd_one_number(){
		$this->assertEquals(1, Calculator::add('1'));	
	}

	public function testAdd_two_numbers(){
		$this->assertEquals(3, Calculator::add('1,2'));
	}

	public function testAdd_several_numbers(){
		$this->assertEquals(6, Calculator::add('1,2,3'));	
	}
}