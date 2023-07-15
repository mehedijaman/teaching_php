<?php 

	include('../Model/Db.php');
	include('../Model/IncomeCategory.php');		

	if (isset($_POST['submit']) && $_POST['submit'] == 'Add Income Category') {
		$data = [
			'name' => htmlspecialchars($_POST['name']),
		];

		try {
			$IncomeCat =  new IncomeCategory();
			$IncomeCat->store($data);
			header('Location:../index.php?view=income_category');
		} catch (Exception $e) {
			echo $e->getMessage();
		}		
	}

	if (isset($_POST['submit']) && $_POST['submit'] == 'Update Income Category') {
		$id = $_POST['id'];
		$data = [
			'name' => htmlspecialchars($_POST['name']),
		];

		try {
			$IncomeCategory = new IncomeCategory();

			$IncomeCategory->update($data,$id);
			header('Location:../index.php?view=income_category');
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'edit') {
		$id = $_REQUEST['id'];

		$IncomeCategory = new IncomeCategory();

		$result = $IncomeCategory->show($id);

		$name = $result[0]['name'];

		header('Location:../index.php?view=income_category_edit&id='.$id.'&name='.$name);
	}

	if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'delete') {
		$id = $_REQUEST['id'];

		$IncomeCategory = new IncomeCategory();

		$result = $IncomeCategory->deleteByPK($id);

		header('Location:../index.php?view=income_category');
	}

	

 ?>