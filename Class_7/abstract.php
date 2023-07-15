<?php 

	/**
	 * 
	 */
	abstract class Math
	{
		
		public $number1;
		public $number2;

		public function sum($number1, $number2)
		{
			$this->number1 = $number1;
			$this->number2 = $number2;

			return $this->number1 + $this->number2;
		}
	}

	$Obj = new Math();
	echo $Obj->sum(12,4);