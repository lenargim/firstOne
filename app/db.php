<?php
$dbhost = 'localhost';
$dbname = 'avtodiagnost';
$dbusername = 'root';
$dbpassword = '';

require 'config.php';

$db = new PDO("mysql:host=$dbhost; dbname=$dbname", $dbusername, $dbpassword);
