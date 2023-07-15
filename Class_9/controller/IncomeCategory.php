<?php 

	include('../Model/Db.php');
	include('../Model/IncomeCategory.php');
	
	if (isset($_POST['submit']) && $_POST['submit'] == 'Add Income Category') {
		$data = [
			'name' => htmlspecialchars($_POST['name']),
		];

		$IncomeCategory =  new IncomeCategory();

		try {
			$IncomeCategory->store($data);
			header('Location:../index.php?view=income_category');
		} catch (Exception $e) {
			echo $e->getMessage();
		}
		
	}
 ?>