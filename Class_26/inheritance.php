<?php 

	class ParentClass{
		public $NumberOne = 33;
		public $NumberTwo = 78;

		public function sum($n1, $n2)
		{
			$this->NumberOne = $n1;
			$this->NumberTwo = $n2;

			$Result = $this->NumberOne + $this->NumberTwo;
			echo $Result;
		}

		public function sub($n1, $n2)
		{
			$this->NumberOne = $n1;
			$this->NumberTwo = $n2;

			$Result = $this->NumberOne - $this->NumberTwo;
			echo $Result;
		}
	}


	class Child extends ParentClass{

	}

	class GrandChild extends Child{
		
	}

	// class child2 extends ParentClass{

	// }


	// // $Object1 = new Child1();
	// $Object2 = new Child2();

	// $Object2->sum(12,42);
	// // $Object1->sub(45,23);