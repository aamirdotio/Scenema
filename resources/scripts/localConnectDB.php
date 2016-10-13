<?php 
$host = 'localhost';
$database = 'scenema';
$dsn = 'mysql:host=$host;dbname=$database; charset=utf8';
$username = 'root';
$password = '';

$message = '';

// Create connection
$mysqli = new mysqli($host, $username, $password,$database);



// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 
//echo "Connected successfully";

 ?>