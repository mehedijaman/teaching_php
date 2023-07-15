<?php 
	session_start();

	if (!$_SESSION['Status'] == 1) {
		session_destroy();
		header('Location:../login.php');
	}

	header('Location:../index.php?page=home');

 ?>