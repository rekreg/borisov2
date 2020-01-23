<?php



function clear_string($str){
	global $link;
	$str = trim(strip_tags($str));
	return mysqli_real_escape_string($link, $str);
}


function clear_int($data){
  return abs((int)$data);
}


function addItemToCatalog($title, $author, $pubyear, $price) {
  
  $sql = 'INSERT INTO catalog (title, author, pubyear, price) VALUES (?, ?, ?, ?)';
  
  global $link;
  if (!$stmt = mysqli_prepare($link, $sql)):
    return false;
  endif;
  
  mysqli_stmt_bind_param($stmt, "ssii", $title, $author, $pubyear, $price);
  
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  
  return true;
  
}




