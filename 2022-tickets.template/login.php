<?php
declare(strict_types=1);

require 'helpers.php';

session_start();

$username = "";
$password = "";

$errors = [];

function login($username, $password): bool{
    $pdo = new PDO("mysql:host=mysql-server; dbname=ticket; charset=utf8", "root", "secret");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare("SELECT * FROM user WHERE username = :name AND password = :pwd");
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    $stmt->bindValue("name", $username);
    $stmt->bindValue("pwd", $password);

    $stmt->execute();

    $user = $stmt->fetch();

    return ($user !== false);
}

if (isPost()) {
    //Valors obtinguts en el formulari
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password");

    //Validació de l'usuari i contrasenya introduits
    try{
        validate_string($username, 1, 255);
        validate_string($password, 1, 255);

        //En cas de pasar el login es crea una sessió
        if(login($username, $password)){
            $message = "Login correcte";
            $_SESSION["logged"] = true;
        } else {
            $errors[] = "Login incorrecte";
        }

    } catch (ValidationException $e){
        $errors[] = "Error al procesar el formulario" . $e->getMessage();
    }
}

require_once 'views/login.view.php';
