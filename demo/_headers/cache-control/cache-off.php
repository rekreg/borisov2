<?php
//header("Cache-control: no-cache");
//header("Cache-control: no-store");
?>
<!DOCTYPE HTML>

<html>
<head>
	<meta charset="utf-8" />
	<title>Запрет кеширования</title>
</head>

<body>
<h1>Запрет кеширования</h1>
<h1><?=date("H:i:s")?></h1>

<?php
	echo date("d.m.Y H:i:s", time() + 60*60*24);
	?>

</body>
</html>
