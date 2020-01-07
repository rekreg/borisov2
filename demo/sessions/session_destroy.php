<?php 
//session_start();
//session_destroy();
//echo session_name();
//echo "<hr>";
//echo session_id();
setcookie(session_name(), session_id(), time()-3600);
//setcookie("PHPSESSID", "remove", time() - 3600);
echo $_COOKIE['PHPSESSID'];

?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Закрыть сессию</title>
</head>
<body>
<h1>Сессия закрыта</h1>
</body>
</html>
