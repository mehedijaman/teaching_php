<?php 
	$year = 400;

	// if (($year % 4 == 0) && (($year % 400 == 0) || ($year % 100 != 0 ))) {
	// 	echo "Leap year";
	// }
	// else
	// {
	// 	echo "Not a leap year";
	// }

	if ($year % 4 == 0) {
		if ($year % 400 == 0) {
			echo "Leap year";
		}
		elseif($year % 100 != 0)
		{
			echo "Leap year";
		}
		else
		{
			echo "Not leap year";
		}
	}
	else
	{
		echo "Not leap year";
	}

 ?>