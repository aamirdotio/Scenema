<?php 
$host = 'localhost';
$database = 'Scenema';
$username = 'root';
$password = '';
$message = '';

try {
	$handler = new PDO('mysql:host=$host;dbname=$database',$username,$password);
	$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch(PDOException $e){
	echo $e->getMessage();
	die();
}


 ?>