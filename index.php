<?php
include 'config.php';

var_dump($_SERVER);

$pdo = new PDO('mysql:host='.$sqlhost.';dbname='.$sqldb, $sqluser, $sqlpw);

$short = substr($_SERVER['REDIRECT_URL'],1);

$statement = $pdo->prepare("SELECT * FROM urls WHERE short = ?");
$statement->execute(array($short));   
$row = $statement->fetch();
var_dump($row);

?>