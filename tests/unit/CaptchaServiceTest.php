<?php
class CaptchaServiceTest extends PHPUnit_Framework_TestCase {
	public function testGetCaptcha(){
		$randomizer = $this->getMock('Randomizer', array('getPattern', 'getOperand', 'getOperator'));
		
		$randomizer->expects($this->once())->method('getPattern')->will($this->returnValue("1"));
		$randomizer->expects($this->exactly(2))->method('getOperand')->will($this->returnValue("1"));
		$randomizer->expects($this->once())->method('getOperator')->will($this->returnValue("1"));
		
		$captchaService = new CaptchaService($randomizer);
		$this->assertEquals("1+ONE",$captchaService->getCaptcha()->toString());
		//$this->assertInstanceOf("Captcha", $captchaService->getCaptcha());
	}
}
?>