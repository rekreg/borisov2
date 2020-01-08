<?php

$f = fopen("data.txt", "r");
$lines = [];
while($line = fgets($f)) {
	$lines[] = $line;
}
fclose($f);

echo "<pre>";
print_r($lines);
echo "</pre>";