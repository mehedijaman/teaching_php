<?php 
	include('libs/class.db.inc');
	include('libs/class.income_category.inc');

	$IncomeCategory = new income_category();

	$data = ['name' => 'Monthly Salary'];

	try {
		$IncomeCategory->create($data);
	} catch (Exception $e) {
		echo $e->getMessage();
	}

	
	

 ?>