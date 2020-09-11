<?php

$dbHost = 'localhost';
$dbName = 'php_game';
$dbUser = 'root';
$dbPass = '';
//Met behulp van PDO zetten we de connectie op, waarna we met setAttribute de manier van errormeldingen weergeven bepalen.
$conn = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// @U7#vyYbkn86DR
?>