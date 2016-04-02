<?php
Class Captcha {
	public function __construct($pattern, $left_operand, $operator, $right_operand) {
		$this->pattern = $pattern;
		$this->operator = new Operator($operator);
	
		if ($pattern == 1) {
			$this->leftOperand = new IntegerOperand($left_operand);
			$this->rightOperand = new StringOperand($right_operand);
		} else {
			$this->leftOperand = new StringOperand($left_operand);
			$this->rightOperand = new IntegerOperand($right_operand);
		}
	}
	public function getLeft() {
		return $this->leftOperand->getValue();
	}
	
	public function getRight(){
		return $this->rightOperand->getValue();
	}
	
	public function getOperator() {
		return $this->operator->getOperator();
	}
	
	public function toString() {
		return $this->getLeft() . $this->getOperator() . $this->getRight();
	}
}
?>
