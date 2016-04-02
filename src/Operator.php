<?php 
class Operator {
	public function __construct($operator){
		$this->operator = $operator;
	}
	public function getOperator(){
		switch($this->operator)
		{
			case 1:{
				return "+";
			}
			case 2:{
				return "*";
			}
			case 3:{
				return "-";
			}
		}
	}
}
?>