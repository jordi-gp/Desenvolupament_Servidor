<?php declare(strict_types=1);

require "helpers.php";

$pdo = new PDO("mysql:host=mysql-server; dbname=ticket; charset=utf8", "root", "secret");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(!isPost()){
    $id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);

    if(!empty($id)){
        $stmt = $pdo->prepare("SELECT * FROM TICKET WHERE id = :id");
        $stmt->bindValue("id", $id);
        $stmt->execute();

        $data = $stmt->fetch();
    }
} else {
    $id = filter_input(INPUT_POST, "id", FILTER_VALIDATE_INT);

    if(empty($id)){
        throw new Exception("El id obtingut no es vàlid");
    }

    $respose = filter_input(INPUT_POST, "response");

    if($respose === "Sí"){
        $pdo = new PDO("mysql:host=mysql-server; dbname=ticket; charset=utf8", "root", "secret");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $pdo->prepare("DELETE FROM ticket WHERE id = :cacaues");
        $stmt->bindValue("cacaues", $id);

        $stmt->execute();

        $message = "S'ha esborrat el ticket amb l'id $id";
    } else {
        $message = "S'ha cancelat l'eliminació del ticket";
    }
}

require "views/tickets-delete.view.php";
