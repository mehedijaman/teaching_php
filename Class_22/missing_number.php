<?php
	
	$n = 9;
	$array = [1,2,3,4,6,7,8,9];
	$size = sizeof($array);

	$missing = null;

	for($i = 1; $i <= $n; $i++)
	{
		$status = 0;
		for($j = 0; $j < $size; $j++)
		{
			if($array[$j] == $i)
			{
				$status = 1;
				break;
			}			
			else
				$status = 0;
		}

		if(!$status)
			$missing = $i;
	}

	echo $missing;