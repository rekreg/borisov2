<?php
/* Основные настройки */

const DB_HOST = "localhost";
const DB_USER = "root";
const DB_PASS = "zzxxcc";
const DB_NAME = "gbook";


$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die(mysqli_connect_error());

/* Основные настройки */

function clean_data($str){
	global $link;
	$str = trim(strip_tags($str));
	return mysqli_real_escape_string($link, $str);
}

/* Сохранение записи в БД */

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	
	$name = clean_data($_POST['name']);
	$email = clean_data($_POST['email']);
	$msg = clean_data($_POST['msg']);
	
	
	// 2. Запрос к базе данных
	$sql = "INSERT INTO msgs (name, email, msg) VALUES ('{$name}', '{$email}', '{$msg}')";
	$result = mysqli_query($link, $sql) or die(mysqli_error($link));


	header("Location: ". $_SERVER["REQUEST_URI"]);
	exit;
	
	
	
} // if($_SERVER['REQUEST_METHOD'] == 'POST')

/* Сохранение записи в БД */

/* Удаление записи из БД */

if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['del'])) {
	
	$id = abs((int)$_GET["del"]);
	
	if($id){
		$sql = "DELETE FROM msgs WHERE id = {$id}";
		$result = mysqli_query($link, $sql) or die(mysqli_error($link));
	}
	

	
}


/* Удаление записи из БД */
?>
<h3>Оставьте запись в нашей Гостевой книге</h3>

<form method="post" action="<?= $_SERVER['REQUEST_URI']?>">
Имя: <br /><input type="text" name="name" /><br />
Email: <br /><input type="text" name="email" /><br />
Сообщение: <br /><textarea name="msg"></textarea><br />

<br />

<input type="submit" value="Отправить!" />

</form>
<?php
/* Вывод записей из БД */
	
	// 2. Запрос к базе данных
	$sql = "SELECT id, name, email, msg, UNIX_TIMESTAMP(datetime) as dt FROM msgs ORDER BY id DESC";
	$result = mysqli_query($link, $sql);

	// Отслеживаем ошибки запроса
	if( !$result ):
		echo "mysqli_errno: ". mysqli_errno($link). "<br>".
		"mysqli_error: ".	
		mysqli_error($link). "<br>";
	else: 
		//echo "Выводим данные <br>";
	endif;
			
			
	$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
		
	
	// Закрываем соединение
	if(mysqli_close($link)):
		//echo "Соединение c БД закрыто <br>";
	endif;
		
			
			
	//// Выводим данные
	$output = "<p style='color: hotpink'>Всего записей в гостевой книге: ".mysqli_num_rows($result)."</p>";
			
	foreach($rows as $row):		
		$output .= "<p>";
		$output .= "<a href='mailto:".$row['email']."'>";
		$output .= $row['name'];
		$output .= "</a> ";
		$output .= date("d-m-Y в h:i", $row['dt'])." написал(а)<br />";
		$output .= nl2br($row['msg']) ;
		$output .= "</p>";
		$output .= "<p align='right'>";
		$output .= "<a href='./index.php?id=gbook&del=".$row['id']."'>";
		$output .= "Удалить";
		$output .= "</a>";
		$output .= "</p>";
	endforeach;
	
	echo $output;

/* Вывод записей из БД */
?>