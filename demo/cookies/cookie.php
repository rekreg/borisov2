<?php
	//setcookie("userName", 'John');
	
	setcookie("userName", 'John', time()-3600);
	
	//echo $_COOKIE['userName'];

 	echo "<pre>";
	print_r($_COOKIE);
	echo "</pre>";
?>