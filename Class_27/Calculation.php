<?php 
	class Calculation{
		public $NumberOne = 10;
		public $NumberTwo = 20;

		public function __construct($n1, $n2)
		{
			$this->NumberOne = $n1;
			$this->NumberTwo = $n2;
		}


		public static function calculateSum()
		{
			return $this->NumberOne + $this->NumberTwo; 
		}

		public function calculateSub()
		{
			return $this->NumberOne - $this->NumberTwo;
		}
	}

	$Object =  new Calculation(12,56);

	$Object->calculateSum();

	// Calculation::calculateSum();