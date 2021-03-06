<?php
	require "inc/lib.inc.php";
	require "inc/config.inc.php";

  if($_SERVER["REQUEST_METHOD"] == "POST"):
    
    $name = clear_string($_POST['name']);
    $email = clear_string($_POST['email']);
    $phone = clear_string($_POST['phone']);
    $address = clear_string($_POST['address']);
    $orderid = $basket['orderid'];
    $dt = time();
    
    $order = "$name|$email|$phone|$address|$orderid|$dt\n";
    file_put_contents("admin/".ORDERS_LOG, $order, FILE_APPEND);

    saveOrder($dt);
    
  endif;


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Сохранение данных заказа</title>
</head>
<body>
	<p>Ваш заказ принят.</p>
	<p><a href="catalog.php">Вернуться в каталог товаров</a></p>
</body>
</html>