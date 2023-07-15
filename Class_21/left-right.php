<?php
	// $str = '3738L202L733R647R28'; // 3738820227336647228

	// $str = str_split($str);

	// $size = sizeof($str);

	// for($i = 0; $i < $size; $i++)
	// {
	// 	if($str[$i] == 'L')
	// 		$str[$i] = $str[$i-1];

	// 	if($str[$i] == 'R')
	// 		$str[$i] = $str[$i+1];


	// 	echo $str[$i];
	// }


	$str = '3718M202N733R647P2887678687';  // 371812023733664772887678687

	$str = str_split($str);
	$size = sizeof($str);

	for($i = 0; $i < $size; $i++)
	{
		switch ($str[$i]) {
			case 'M':
				$str[$i] = $str[$i-2];
				break;

			case 'N':
				$str[$i] = $str[$i+2];
				break;

			case 'R':
				$str[$i] = $str[$i+1];
				break;

			case 'P':
				$str[$i] = $str[$size-1];
				break;
			
			default:
				break;
		}
		
		echo $str[$i];
	}

