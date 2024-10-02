<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$username = $_POST['username'];
$pwd = $_POST['pwd'];
$email = $_POST['email'];
 try {
    require_once "dbh.inc.php";
$query = "INSERT INTO users (username,pwd,email) VALUES ($username,$pwd,$email);";

$stat = $pdo->prepare($query);
$stat->execute([$username,$pwd,$email]);
$pdo =null;
$stat=null;
header('location:..index.php');
die();
 } catch (PDOException $e) {
    die('Query failed: ' .$e->getMessage());
 }
}
else{
    header('location:..index.php');
}