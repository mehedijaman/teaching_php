<?php 
	class Classname{
		function __construct($name ='Stranger', $title = 'Mr.'){
			// echo "Hello ".$title." ". $name;
		}

		function greet($name, $title = 'Mr.'){
			echo "Hello ".$title." ".$name;
		}

		function sum($Numbers){
			$Size = sizeof($Numbers);
			$Result = 0;
			for ($i=0; $i < $Size; $i++) { 
				$Result = $Result + $Numbers[$i];
			}
			return $Result;
		}

		function sub($n1, $n2){
			return $n1 - $n2;
		}

		function mul($n1, $n2){
			return $n1 * $n2;
		}

		function div($n1,$n2){
			return $n1 / $n2;
		}

	}

	$Obj = new Classname();

	// $Obj->greet('Jahana','Miss.');

	$Numbers = [3,4,35,34,34,12,123,123,189];

	$Result = $Obj->sum($Numbers);
	echo $Result;
 ?>