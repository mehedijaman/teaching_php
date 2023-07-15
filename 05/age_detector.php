<?php 
	
	$age = 45;

	if($age >= 0 && $age < 3)
	{
		echo "Infant";
	}
	elseif ($age >= 3 && $age < 12) 
	{
		echo "Child";
	}
	elseif($age >= 12 && $age < 18)
	{
		echo "Teenager";
	}
	elseif($age >= 18 && $age < 25)
	{
		echo "Young";
	}
	elseif ($age >= 25 && $age < 40) {
		echo "Adult";
	}
	elseif ($age >= 40) {
		echo "Adult";
	}
	else
	{
		echo "Invalid Age";
	}

 ?>