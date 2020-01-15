<?php
	
	//echo phpinfo(); die;

	if($_SERVER['REQUEST_METHOD']=='POST'){
		// Распечатываем массив 
		echo "<pre>";
		print_r($_FILES);
		echo "</pre>";
		
		$n = $_FILES["userfile"]["name"];
		$t = $_FILES["userfile"]["tmp_name"];
		move_uploaded_file($t, "downloads/".$n);
		// Заканчиваем распечатывать массив
		
	}
?>
<form action='upload.php' method='post' enctype='multipart/form-data'>
<input type='file' name='userfile'>
<input type='submit'>
</form>