<?php 
abstract class Operand {
	public function __construct($value) {
		$this->value = $value;
	}
	abstract function getValue();
}
?>