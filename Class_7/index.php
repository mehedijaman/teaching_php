<?php 
	
	/**
	 * Class for mathematical equation
	 */
	class Math
	{
		
		public $number1;
		public $number2;

		public function sum($number1, $number2)
		{
			$this->number1 = $number1;
			$this->number2 = $number2;

			return $this->number1 + $this->number2;
		}

		private function sub()
		{
			return $this->number1 + $this->number2;
		}

		public function mul()
		{
			return $this->number1 * $this->number2;
		}

		public function div()
		{
			return $this->number1 / $this->number2;
		}
	}

	/**
	 * 
	 */
	class SubClass extends Math
	{
		Math::sub();
		
	}

	// $ObjMath = new math();

	// $ObjMath->number1 = 12;

	// $result = $ObjMath->sum(12,14);

	// echo $result;