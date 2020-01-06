<?php


$visitCounter = 0;
if(isset($_COOKIE['visitCounter'])) {
	$visitCounter = $_COOKIE['visitCounter'];
}
$visitCounter++;

	 
$lastVisit = "";
if(isset($_COOKIE["lastVisit"])) {
	$lastVisit = date("d.m.Y h:m:s",$_COOKIE['lastVisit']);
}


setcookie("visitCounter", $visitCounter, 
0x7FFFFFFF);

setcookie("lastVisit", time(), 
0x7FFFFFFF);
/*
echo "<hr>";
echo($_COOKIE['visitCounter']);
echo "</hr>";
*/






/*if(!isset($_COOKIE['visitCounter'])){
	setcookie("visitCounter", $visitCounter+1, time()+3600);
	//var_dump($result);
} else {
	$visitCounter = $_COOKIE['visitCounter'];
	if(date('d-m-Y', $_COOKIE['lastVisit']) != date('d-m-Y')) {
		setcookie("visitCounter", $visitCounter+1, time()+3600);
	}
	

}


if(!isset($_COOKIE['lastVisit'])) {
	setcookie("lastVisit", time(), time()+3600);
} else {
	$lastVisit = $_COOKIE['lastVisit'];
	if(date('d-m-Y', $_COOKIE['lastVisit']) != date('d-m-Y')) {
	setcookie("lastVisit", time(), time()+3600);
	}
}*/
	


function sayHello($visitCounter, $lastVisit){
	$hello = "";
	if($visitCounter === 0) {
		$hello = "Спасибо, что зашли на огонек";
	} elseif($visitCounter > 0) {
		$hello = "Вы зашли к нам {$visitCounter} раз.<br>";
		$hello .= "Последнее посещение: ";
		$hello .= date("d.m.Y h:i:s", (int)$lastVisit);
	}
	return $hello;
}




?>