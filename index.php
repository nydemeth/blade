<?php
include_once 'config.php';
include_once 'func.php';

$pdo = new PDO('mysql:host='.$sqlhost.';dbname='.$sqldb, $sqluser, $sqlpw);

$short = substr($_SERVER['REDIRECT_URL'],1);
if ($short!="") {
    $statement = $pdo->prepare("SELECT * FROM urls WHERE short = ?");
    $statement->execute(array($short));   
    $row = $statement->fetch();
    if ($row != false) {
        redirect($row["url"]);
    }
}


#var_dump($_SERVER);

include_once 'main.php';


?>