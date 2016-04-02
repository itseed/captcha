<?php 
$container = new Slim\Container;

$container['randomizer'] = function() {
	return new Randomizer();
};

$container['captchaService'] = function($container) {
	return new CaptchaService($container->get('randomizer'));
};

$container['captchaController'] = function($container) {
	return new CaptchaController($container->get('captchaService'));
};
?>