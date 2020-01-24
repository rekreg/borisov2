<?php

const DB_HOST = "localhost";
const DB_USER = "root";
const DB_PASS = "zzxxcc";
const DB_NAME = "eshop";

const ORDERS_LOG = "orders.log";

// [ "orderid"=>501bbdee1b4d3, 2=>1, 6=>1 ]
$basket = [];
$count = 0;


$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die(mysqli_connect_error());

basketInit();

/*
echo "<pre>";
print_r($basket);
echo "<pre>";
*/

