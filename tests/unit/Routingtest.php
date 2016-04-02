<?php
use \Slim\Http\Environment; 
class RoutingFunctionTest extends PHPUnit_Framework_TestCase {
	public function testRouteCaptcha(){
		require __DIR__.'/../../src/routing.php';
		
		$container['environment'] = function(){
			return Environment::mock([
				'REQUEST_URI' => '/captcha',
				'REQUEST_METHOD' => 'GET'
			]);
		};
		
		$container['randomizer'] = function() {
			$randomizer = $this->getMock('Randomizer', array('getPattern', 'getOperand', 'getOperator'));
			
			$randomizer->expects($this->once())->method('getPattern')->will($this->returnValue("1"));
			$randomizer->expects($this->exactly(2))->method('getOperand')->will($this->returnValue("1"));
			$randomizer->expects($this->once())->method('getOperator')->will($this->returnValue("1"));
			
			return $randomizer;
		};
		
		$app->set['container'] = $container;
		ob_start();
		$app->run();
		$output = ob_get_clean();
		$this->assertEquals(json_encode(array('left' => '1', 'operator' => '+', 'right' => 'ONE')), $output);
	}
}
?>