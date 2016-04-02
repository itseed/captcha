<?php 
	class IntegerOperandTest extends PHPUnit_Framework_TestCase{
		public function testShouldBe1() {
			$integerOperand = new IntegerOperand(1);
			$this->assertEquals('1', $integerOperand->getValue());
		}
		public function testShouldBe9() {
			$integerOperand = new IntegerOperand(9);
			$this->assertEquals('9', $integerOperand->getValue());
		}
	} 
?>