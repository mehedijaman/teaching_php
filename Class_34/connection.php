<?php 
	$Host = 'localhost';
	$User = 'phpmyadmin';
	$Pass = 'Q1w2e3r4t5!';
	$DB   = 'demo';

	$Connection = mysqli_connect($Host,$User,$Pass,$DB);

	if(!$Connection)
		die("Connection Error!". mysql_connect_error());
 ?>