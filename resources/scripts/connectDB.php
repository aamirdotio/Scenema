<?php 
$host = 'studmysql01.fhict.local';
$database = 'dbi356141';
$dsn = 'mysql:host=$host;dbname=$database; charset=utf8';
$username = 'dbi356141';
$password = '05940613';

$message = '';

// Create connection
$mysqli = new mysqli($host, $username, $password,$database);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 
//echo "Connected successfully";

 ?>