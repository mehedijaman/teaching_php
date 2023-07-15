<?php 
	
	include('Students.php');

	$Student = new Students();

	if(isset($_POST['submit']))
	{
		if ($_POST['submit'] == 'add') {
			$Data = [
				'name' => $_POST['name'],
				'roll' => $_POST['roll'],
				'phone' => $_POST['phone'],
				'address' => $_POST['address'],
			];
			$Result = $Student->add($_POST);
		}
	}

	$Result = $Student->add($Data);
	$Result = $Student->get($StudentID);
	$Result = $Student->getAll();
	$Result = $Student->edit($Data,$StudentID);
	$Result = $Student->delete($StudentID);

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
</body>
</html>