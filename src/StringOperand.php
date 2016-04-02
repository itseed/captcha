<?php 
	class StringOperand extends Operand{
		var $number_array = array(
			1 => 'ONE',
			2 => 'TWO',
			3 => 'THREE',
			4 => 'FOUR',
			5 => 'FIVE',
			6 => 'SIX',
			7 => 'SEVEN',
			8 => 'EIGHT',
			9 => 'NINE');
		
		public function getValue(){
			return $this->number_array[$this->value];
		}
	}
?>