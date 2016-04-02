<?php 
class OperatorTest extends PHPUnit_Framework_TestCase{
	public function testShouldBePlus() {
		$operator = new Operator(1);
		$this->assertEquals("+", $operator->getOperator());
	}
	public function testShouldBeMultiply() {
		$operator = new Operator(2);
		$this->assertEquals("*", $operator->getOperator());
	}
	public function testShouldBeMinus() {
		$operator = new Operator(3);
		$this->assertEquals("-", $operator->getOperator());
	}
}
?>