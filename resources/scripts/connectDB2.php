<?php 
$host = 'studmysql01.fhict.local';
$database = 'dbi356141';
$dsn = 'mysql:host=$host;dbname=$database; charset=utf8';
$username = 'dbi356141';
$password = '05940613';

$message = '';

// Create connection
$conn = new mysqli($host, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

 ?>