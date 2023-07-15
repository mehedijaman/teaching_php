<?php
	$n1 = 120;
	$n2 = 340;
	$n3 = 350;

	// if($n1 > $n2)
	// {
	// 	if($n1 > $n3)
	// 	{
	// 		echo $n1;
	// 	}
	// 	else
	// 	{
	// 		echo $n3;
	// 	}
	// }
	// else
	// {
	// 	if($n2 > $n3)
	// 	{
	// 		echo $n2;
	// 	}
	// 	else
	// 	{
	// 		echo $n3;
	// 	}
	// }

	// if( $n1 > $n2 && $n1 > $n3)
	// {
	// 	echo $n1;
	// }
	// elseif($n2 > $n1 && $n2 > $n3)
	// {
	// 	echo $n2;
	// }
	// else
	// {
	// 	echo $n3;
	// }


	echo $n1 > $n2?($n1>$n3?$n1:$n3):($n2>$n3?$n2:$n3);