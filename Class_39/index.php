<?php 
	include('header.php');

	if(isset($_REQUEST['page']))
	{
		$page = $_REQUEST['page'];

		$PageName = $page.".php";
		include($PageName);
	}
	else
	{
		include('home.php');
	}
	
	include('footer.php');
 ?>