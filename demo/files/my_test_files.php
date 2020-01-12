<?php

$file = file_get_contents("https://rosreestr-info.ru");


file_put_contents("rosreestr_html.txt", $file);



/*
if(is_dir("../files")) {
	echo "Директория существует";
}

echo "<hr>";
echo "Длина файла data.txt: ". filesize("data.txt"). " байта";
echo "<hr>";

echo "Файл file.txt был изменен: ". filemtime("data.txt");
echo "<br>";
echo date("d.m.Y H:i:s", filemtime("data.txt"));
echo "<hr>";

echo "Файл был запрошен: ". fileatime("data.txt");
echo "<br>";
echo date("d.m.Y H:i:s", fileatime("data.txt"));
echo "<hr>";

echo "<hr>";


echo "Файл можно читать? ".var_dump(is_readable("data.txt"));

echo "<hr>";
*/


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
</body>
</html>