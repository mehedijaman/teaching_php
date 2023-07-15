<?php 
	
	class ParentClass{
		function sum($n1, $n2){
			return $n1 + $n2;
		}

		function sub($n1, $n2){
			return $n1 - $n2;
		}
	}

	class ChildClass extends ParentClass{
		function mul($n1, $n2){
			return $n1 * $n2;
		}

		function div($n1, $n2){
			return  $n1 / $n2;
		}
	}

	$Obj = new ChildClass();
	$Obj->mul(2,4);
	$Obj->div(2,4);
	$Obj->sum(2,4);
	$Obj->sub(2,4);

 ?>