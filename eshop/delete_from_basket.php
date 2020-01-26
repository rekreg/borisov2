<?php
	// подключение библиотек
	require "inc/lib.inc.php";
	require "inc/config.inc.php";



  $id = clear_int($_GET['id']);
  if($id):
    deleteItemFromBasket($id);
    header("Location: basket.php"); 
    exit;
  endif;
