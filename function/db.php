<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'shamsia';

$link = mysqli_connect($host, $user, $pass, $db) or mysqli_error('Tidak dapat mengakses Database');

?>