<?php

$user = [
	'name' => 'Andrey',
	'login' => 'root',
	'password' => '1234'
];


$str = base64_encode( serialize($user) );


echo "<pre>";
print_r( unserialize(base64_decode($str)));
echo "</pre>";












	//setcookie("userName", 'John');
	
/*	setcookie("userName", 'John', time()-3600);*/
	
	//echo $_COOKIE['userName'];


?>