<?php
class RandomizerTest extends PHPUnit_Framework_TestCase {
	public function testGetPatternShouldBeBetween1to2() {
		$randomizer = new Randomizer ();
		$rand = $randomizer->getPattern();
		//$this->assertTrue($rand > 0 && $rand < 3);
		$this->assertContains($rand, array(1,2));
	}
	public function testGetOperandShouldBeBetween1to9() {
		$randomizer = new Randomizer ();
		$rand = $randomizer->getOperand();
		$this->assertTrue($rand > 0 && $rand < 10);
	}
	public function testGetOperatorShouldBeBetween1to3() {
		$randomizer = new Randomizer ();
		$rand = $randomizer->getOperator();
		$this->assertTrue($rand > 0 && $rand < 4);
	}
}
?>