<?php

	// $result = mkdir('/var/www/html/class/cmt8','755');
	// var_dump($result);

	// $resuslt = scandir('New');

	// print_r($result);

	// $result = rmdir('New');

	// var_dump($result);

	
	// $fileName = 'new_text.txt';
	// $contents = 'Hello New text document';

	// $result = file_put_contents($fileName,$contents);

	// var_dump($result);


	// $file_name = 'new_text.txt';
	// $contents  = '\nThis is another line';

	// $result = file_put_contents($file_name, $contents, FILE_APPEND);

	// var_dump($result);

	
	$file_name = 'new_text.txt';

	// $result = file_get_contents($file_name);


	// echo $result;

	$result = unlink($file_name);

	var_dump($result);