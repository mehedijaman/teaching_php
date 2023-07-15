<?php 

	/**
	 * 
	 */
	interface Math
	{
		
		public function sum($number1,$number2);
		public function sub($number1,$number2);
		public function mul($number1,$number2);
		public function div($number1,$number2);

	}

	/**
	 * 
	 */
	class MathematicalCalcuation implements Math
	{
		
		public sub($number1,$number2)
		{
			return $number1 + $number2;
		}
	}