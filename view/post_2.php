<?php
$fp = fsockopen ("http://192.168.56.4/", 80, $errno, $errstr, $timeout);
var_dump($fp);
$ssl = fsockopen('ssl://www.example.com', 443, $errno, $errstr, $timeout);
var_dump($ssl);
?>