<?php 

	include('templates/header.php');
	include('templates/sidebar.php');

	if(isset($_REQUEST['Page']))
	{
		include('templates/'.$_REQUEST['Page'].'.php');
	}
	else{
		include('templates/home.php');
	}
	

	include('templates/footer.php');

 ?>