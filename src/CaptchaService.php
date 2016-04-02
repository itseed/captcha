<?php 
class CaptchaService {
	public function __construct($randomizer){
		$this->randomizer = $randomizer;
	}
	
	public function getCaptcha() {
		return new Captcha(
			$this->randomizer->getPattern(),
			$this->randomizer->getOperand(),
			$this->randomizer->getOperator(),
			$this->randomizer->getOperand()
		);
	}
}
?>