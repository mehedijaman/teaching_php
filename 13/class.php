<?php 
	class cst 
	{
		function sum($n1, $n2){
			echo $n1+$n2;
		}

		function sub($n1, $n2){
			echo $n1 - $n2;
		}

		function mul($n1, $n2){
			echo $n1 * $n2;
		}

		function div($n1, $n2){
			echo $n1 / $n2;
		}
	}


	$Obj = new cst();

	// $Obj->sum(4,6);
	// $Obj->sum(10,15);
	// $Obj->sum(15,20);
	// $Obj->sum(56,23);

	// $Obj->sub(5,4);
	// $Obj->mul(4,5);
	$Obj->div(8,2);

 ?>