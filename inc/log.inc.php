<?php
$dt = time();
$page = $_GET['id'] ?? "index";
$ref = $_SERVER['HTTP_REFERER'];
$ref = pathinfo($ref, PATHINFO_BASENAME);
$path = "$dt|$ref|$page\n";

file_put_contents(PATH_LOG, $path, FILE_APPEND);