<?php

define('DB_NAME', 'test_company');
define('DB_USER', 'test_user');
define('DB_PASSWORD', 'PASSWORD');
define('DB_HOST', 'localhost');

$conn = new PDO("mysql:host=" . DB_HOST . "; dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
//$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);