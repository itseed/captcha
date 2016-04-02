<?php 
class CaptchaController {
	public function __construct($captchaService) {
		$this->captchaService = $captchaService;
	}
	public function dispatch(){
		return json_encode($this->captchaToArray($this->captchaService->getCaptcha()));
	}
	private function captchaToArray($captcha) {
		return array('left' => $captcha->getLeft(),
		'operator' => $captcha->getOperator(),
		'right' => $captcha->getRight());
	}
}
?>