<?php
class CaptchaTest extends PHPUnit_Framework_TestCase {
	var $dummy_operator = 1;
	var $dummy_right = 1;
	var $dummy_left = 1;
	var $dummy_pattern = 1;
	
	public function testFirstPatternLeftShouldBe1() {
		$captcha = new Captcha ( 1, 1, $this->dummy_operator, $this->dummy_right );
		$this->assertEquals ( "1", $captcha->getLeft () );
	}
	public function testFirstPatternLeftShouldBe2() {
		$captcha = new Captcha ( 1, 2, $this->dummy_operator, $this->dummy_right );
		$this->assertEquals ( "2", $captcha->getLeft () );
	}
	public function testFirstPatternLeftShouldBe9() {
		$captcha = new Captcha ( 1, 9, $this->dummy_operator, $this->dummy_right );
		$this->assertEquals ( "9", $captcha->getLeft () );
	}
	public function testSecondPatternLeftShouldBe1() {
		$captcha = new Captcha ( 2, 1, $this->dummy_operator, $this->dummy_right );
		$this->assertEquals ( "ONE", $captcha->getLeft () );
	}
	public function testSecondPatternLeftShouldBe9(){
		$captcha = new Captcha(2,9,$this->dummy_operator, $this->dummy_right);
		$this->assertEquals ("NINE", $captcha->getLeft());
	}
	
	public function testFirstPatternRightShouldBe1(){
		$captcha = new Captcha(1, $this->dummy_left, $this->dummy_operator, 1);
		$this->assertEquals("ONE", $captcha->getRight());
	}
	public function testFirstPatternRightShouldBe9(){
		$captcha = new Captcha(1, $this->dummy_left, $this->dummy_operator, 9);
		$this->assertEquals("NINE", $captcha->getRight());
	}
	public function testSecondPatternRightShouldBe1() {
		$captcha = new Captcha(2, $this->dummy_left, $this->dummy_operator, 1);
		$this->assertEquals("1", $captcha->getRight());
	}
	public function testSecondPatternRightShouldBe9() {
		$captcha = new Captcha(2, $this->dummy_left, $this->dummy_operator, 9);
		$this->assertEquals("9", $captcha->getRight());
	}
	public function testOperatorShouldBePlus() {
		$captcha = new Captcha($this->dummy_pattern, $this->dummy_left, 1, $this->dummy_right);
		$this->assertEquals("+", $captcha->getOperator());
	}
	public function testOperatorShouldBeMultiple() {
		$captcha = new Captcha($this->dummy_pattern, $this->dummy_left, 2, $this->dummy_right);
		$this->assertEquals("*", $captcha->getOperator());
	}
	public function testOperatorShouldBeMinus() {
		$captcha = new Captcha($this->dummy_pattern, $this->dummy_left, 3, $this->dummy_right);
		$this->assertEquals("-", $captcha->getOperator());
	}
	public function testFirstPatternShouldBe1PlusOne() {
		$captcha = new Captcha(1, 1, 1, 1);
		$this->assertEquals("1+ONE", $captcha->toString());
	}
	public function testSecondPatternShouldBeOnePlus1() {
		$captcha = new Captcha(2, 1, 1, 1);
		$this->assertEquals("ONE+1", $captcha->toString());
	}
	public function testFirstPatternShouldBe9PlusOne() {
		$captcha = new Captcha(1, 9, 1, 1);
		$this->assertEquals("9+ONE", $captcha->toString());
	}
	public function testSecondPatternShouldBeNinePlus1() {
		$captcha = new Captcha(2, 9, 1, 1);
		$this->assertEquals("NINE+1", $captcha->toString());
	}
	public function testFirstPatternShouldBe1MultiplyOne() {
		$captcha = new Captcha(1, 1, 2, 1);
		$this->assertEquals("1*ONE", $captcha->toString());
	}
	public function testFirstPatternShouldBe1MinusOne() {
		$captcha = new Captcha(1, 1, 3, 1);
		$this->assertEquals("1-ONE", $captcha->toString());
	}

	public function testFirstPatternShouldBe1MultiplyNine() {
		$captcha = new Captcha(1, 1, 2, 9);
		$this->assertEquals("1*NINE", $captcha->toString());
	}
	public function testSecondPatternShouldBeOneMinus9() {
		$captcha = new Captcha(2, 1, 3, 9);
		$this->assertEquals("ONE-9", $captcha->toString());
	}
}
?>
