<?php
	// подключение библиотек
require "inc/lib.inc.php";
require "inc/config.inc.php";

$id = clear_int($_GET['id']);

if($id):
  add2Basket($id);
  header("Location: catalog.php"); 
  exit;
else:
  echo "Ошибочка! id должнен быть числом";
endif;




//[ "orderid"=>501bbdee1b4d3, 2=>1, 6=>1 ]



