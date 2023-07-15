<?php 
	interface  ParentClass{

		public function sum($n1,$n2);

		public function sub($n1, $n2);
	}

	class ChildClass implements ParentClass{
		public function sum($n1,$n2)
		{
			return $n1 + $n2;
		}

		public function sub($n1, $n2)
		{
			return $n1-$n2;
		}
	}

	$Object = new ChildClass();

	echo $Object->sum(2,4);