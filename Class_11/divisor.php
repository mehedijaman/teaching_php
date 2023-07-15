<?php
	$number = 15;

	for($counter = 1; $counter <= $number; $counter++)
	{
		$remainder = $number % $counter;
		if($remainder == 0)
			echo $counter."<br>";
	}