<?php 
class CaptchaControllerTest extends PHPUnit_Framework_TestCase {
	public function testDispatchShouldBeJSON() {
// 		$captchaService = $this->getMock('CaptchaService', array('getCaptcha'));
		$captchaService = $this->getMockBuilder('CaptchaService')->disableOriginalConstructor()->getMock();
		
		$captchaService->expects($this->once())->method('getCaptcha')->will($this->returnValue(new Captcha(1,1,1,1)));
		
		$captchaController = new CaptchaController($captchaService);
		$this->assertJsonStringEqualsJsonString(
				json_encode(array(
				"left" => "1",
				"operator" => "+",
				"right" => "ONE")),
				$captchaController->dispatch(null, null));
		
	}
}
?>