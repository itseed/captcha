<?php 
class FizzbuzTest extends PHPUnit_Framework_TestCase {
	public function testShouldBe1(){
		$fizzbuzz = new Fizzbuzz();
		$this->assertEquals("1", $fizzbuzz->count(1));
	}
	
	public function testShuldBeFizz(){
		$fizzbuzz = new Fizzbuzz();
		$this->assertEquals("Fizz", $fizzbuzz->count(3));
	}
	
	public function testSholdBeBuzz(){
		$fizzbuzz = new Fizzbuzz();
		$this->assertEquals("Buzz", $fizzbuzz->count(5));
	}
	
	public function testSholdBeFizzBuzz(){
		$fizzbuzz = new Fizzbuzz();
		$this->assertEquals("FizzBuzz", $fizzbuzz->count(15));
	}
}
?>