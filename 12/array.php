<?php 
	$table = ['book','pen','notebook', 'phone', 'charger', 'laptop', 'mouse'];

	$Size = sizeof($table);

	for($i = 0; $i < $Size; $i++)
	{
		echo $table[$i]." - ".$i."<br>";
	}

 ?>