<?php 
require __DIR__.'/Container.php';

$app = new \Slim\App($container);


$app->get('/captcha', function($request, $response, $args){ 
	return $response->write($this->captchaController->dispatch());
});

?>