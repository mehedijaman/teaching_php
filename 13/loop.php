<?php 
	
	class something{
		function loop($start, $end, $step){
			for($i = $start; $i <= $end; $i += $step){
				echo $i."<br>";
			}
		}
	}


	$Obj = new something();

	$Obj->loop(1, 10, 2);
 ?>