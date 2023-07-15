<?php 
	
	include('../Model/Db.php');
	include('../Model/Income.php');

	if (isset($_POST['submit']) && $_POST['submit'] == 'Add Income') {
		$data = [
			'category_id' => htmlspecialchars($_POST['category_id']),
			'amount' 	  => htmlspecialchars($_POST['amount']),
			'description' => htmlspecialchars($_POST['description']),
			'incnome_date'=> htmlspecialchars($_POST['income_date']),
		];

		$Income = new Income();
		try {
			$Income->store($data);
			header('Location:../index.php?view=income');
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'edit') {
		$id = $_REQUEST['id'];

		$Income = new Income();
		$Data = $Income->show($id);
		


		$CategoryID  = $Data[0]['category_id'];
		$Amount 	 = $Data[0]['amount'];
		$Description = $Data[0]['description'];
		$IncomeDate  = $Data[0]['income_date'];

		header("Location:../index.php?view=income_edit&CategoryID=".$CategoryID."&Amount=".$Amount."&IncomeDate".$IncomeDate.'"');

	}

 ?>