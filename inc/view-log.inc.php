<?php

if(is_file(PATH_LOG)):
	$file = file(PATH_LOG);
	echo "<ol>";
	foreach($file as $line):
		list($dt, $page, $ref) = explode("|", $line);
		echo "<li>";
		echo date("d.m.Y h:i:s", $dt);
		echo " $page";
		echo " ⟹ ";
		echo " $ref ";
		echo "</li>";
		
	endforeach;
	echo "</ol>";
else:
	echo "Файл логов поврежден";
endif;
	
//$bodytag = str_replace("http://localhost:8080", "", $arr[2]);
