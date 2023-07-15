<?php 

	// public
	// private
	// protected

	class calculation{
		public $n1 = 11;
		public $n2 = 20;

		public function __construct()
		{
			echo "This is constructor function";
		}


		public static function sum($n1, $n2)
		{
			$this->n1 = $n1;
			$this->n2 = $n2;
			return $this->n1 + $this->n2;
		}

		public function sub($n1, $n2)
		{

			// $sum = $this->sum(2,6);
			$this->n1 = $n1;
			$this->n2 = $n2;
			return $this->n1 - $this->n2;
		}

		public function mul($n1, $n2)
		{
			$this->n1 = $n1;
			$this->n2 = $n2;
			return $this->n1 * $this->n2;
		}

		public function div($n1, $n2)
		{
			$this->n1 = $n1;
			$this->n2 = $n2;
			return $this->n1 / $this->n2;
		}
	}