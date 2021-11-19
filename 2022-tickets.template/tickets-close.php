<?php declare(strict_types=1);

require "helpers.php";

$idTemp = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);

if(!empty($idTemp)){
    $id = $idTemp;
} else {
    throw new Exception("L'id es invàlid");
}

$pdo = new PDO("mysql:host=mysql-server; dbname=ticket; charset=utf8", "root", "secret");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $pdo->prepare("UPDATE ticket SET status_id = 2 WHERE id = :id");

$stmt->bindValue("id", $id);
$stmt->execute();

$result = $stmt->rowCount();


require "views/tickets-close.view.php";
