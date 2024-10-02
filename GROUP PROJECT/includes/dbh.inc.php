<?php
//dsn stands for 
$dsn = "mysql:localhost;dbname=myfirstdatabase";
$dbusername = "root";
$dbpassword = "";

try{
	//pdo stands for php data object
	$pdo = new PDO($dsn,$dbusername,$dbpassword);
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
	echo "connection failed: ".$e->getMessage();
}