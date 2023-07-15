<?php 
  include('header.php');

  $page = $_REQUEST['page'];

  switch($page)
  {
    case 'home':
      include('home.php');
      break;

    case 'features':
      include('features.php');
      break;

    case 'pricing':
      include('pricing.php');
      break;

    case 'products':
      include('products.php');
      break;

    case 'contact':
      include('contact.php');
      break;

    default:
      include('home.php');
      break;
  }  
  
  include('footer.php');

 ?>