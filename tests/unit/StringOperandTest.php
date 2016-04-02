<?php 
class StringOperandTest extends PHPUnit_Framework_TestCase{
	public function testShouldBeOne(){
		$stringOperand = new StringOperand(1);
		$this->assertEquals("ONE", $stringOperand->getValue());
	}
	public function testShouldBeNine(){
		$stringOperand = new StringOperand(9);
		$this->assertEquals("NINE", $stringOperand->getValue());
	}
}
?>