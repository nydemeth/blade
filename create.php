<?php
include_once 'config.php';
include_once 'func.php';

$pdo = new PDO('mysql:host='.$sqlhost.';dbname='.$sqldb, $sqluser, $sqlpw);


if (isset($_REQUEST["short"]) && isset($_REQUEST["url"])) {
    $statement = $pdo->prepare("INSERT INTO urls (short, url) VALUES (?, ?)");
    $statement->execute(array($_REQUEST["short"],$_REQUEST["url"]));   
    redirect($_REQUEST["url"]);
}
else {
    redirect("/");
}

?>