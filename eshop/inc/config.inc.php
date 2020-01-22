<?php

const DB_HOST = "localhost";
const DB_USER = "root";
const DB_PASS = "zzxxcc";
const DB_NAME = "eshop";

const ORDERS_LOG = "orders.log";

$basket = [];
$count = 0;


//echo 1;
$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die(mysqli_connect_error());

