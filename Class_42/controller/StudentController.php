<?php 
	include('../model/Db.php');
	include('../model/Students.php');

	$Obj = new Students();
	
	if(isset($_POST['submit']))
	{
		if ($_POST['submit'] == 'InsertStudent') {
			$Data = [
				'Name' => $_POST['name'],
				'Roll' => $_POST['roll'],
				'Phone' => $_POST['phone'],
				'Address' => $_POST['address'],
			];

			$Obj->add($Data);
			header('Location:../index.php');
		}
	}

 ?>