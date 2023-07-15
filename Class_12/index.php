<?php 
	$view = $_REQUEST['view'];

	include('views/header.php');

	switch ($view) {
		case 'income_category':
			include('views/income_category.php');
			break;
		case 'income_category_edit':
			include('views/income_category_edit.php');
			break;

		case 'income':
			include('views/income.php');
			break;
		case 'income_edit':
			include('views/income_edit.php');
			break;

		case 'expense_category':
			include('views/expense_category.php');
			break;
		
		default:
			include('views/home.php');
			break;
	}

	include('views/footer.php');	
 ?>