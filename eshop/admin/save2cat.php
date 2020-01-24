<?php
	// подключение библиотек
	require "secure/session.inc.php";
	require "../inc/config.inc.php";
	require "../inc/lib.inc.php";


$title = clear_string($_POST['title']) ?? "";
$author = clear_string($_POST['author']) ?? "";
$pubyear = clear_int($_POST['pubyear']) ?? 0;
$price = clear_int($_POST['price']) ?? 0;


if(!addItemToCatalog($title, $author, $pubyear, $price)): 
  echo 'Произошла ошибка при добавлении товара в каталог';
  echo "Мы в полной Ж";
else:
  header("Location: add2cat.php"); 
  exit;
endif;
