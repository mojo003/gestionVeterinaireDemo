<?php

$dbHost = 'localhost';
$dbPort = 5432;
$dbName = 'veterinary';
$dbUsername = 'postgres';
$dbPassword = 'user03';
$dbOptions = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUsername, $dbPassword, $dbOptions);

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

?>