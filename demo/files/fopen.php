<?php

$f = fopen("data.txt", "r");
$lines = [];
while( !feof($f) ) {
	$bytes[] = fgetc($f);
}
fclose($f);

echo "<pre>";
print_r($bytes);
echo "</pre>";
