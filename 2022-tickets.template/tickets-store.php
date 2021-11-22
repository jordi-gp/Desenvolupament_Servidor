<?php declare(strict_types=1); ?>
<?php
session_start();

require "helpers.php";
require 'src/Exceptions/FileUploadException.php';
require_once 'src/Exceptions/NoUploadedFileException.php';
require_once 'src/Exceptions/InvalidEmailValidationException.php';

const MAX_SIZE = 1024 * 1000;
const SCREENSHOT_PATH = "uploads";

$data["title"] = "";
$data["message"] = "";
$data["email"] = "";

$validTypes = ["image/jpeg", "image/jpg"];

$errors = [];

if (!isPost()) {
    die("Aquesta pàgina sols usa el mètode POST");
}
    try{
        validate_string($_POST["title"], 1, 255);
        $data["title"] = clean($_POST["title"]);

        validate_string($_POST["message"], 1, 1000);
        $data["message"] = clean($_POST["message"]);

        validate_email($_POST["email"]);
        $data["email"] = clean($_POST["email"]);
    } catch (Exception $e){
        $errors[] = $e->getMessage();
    }

if(!empty($errors)){
    try {
        if (!empty($_FILES['screenshot']) && ($_FILES['screenshot']['error'] == UPLOAD_ERR_OK)) {
            if (!file_exists(SCREENSHOT_PATH))
                mkdir(SCREENSHOT_PATH, 0777, true);

            $tempFilename = $_FILES["screenshot"]["tmp_name"];
            $currentFilename = $_FILES["screenshot"]["name"];

            $mimeType = getFileExtension($tempFilename);

            $extension = explode("/", getFileExtension($tempFilename))[1];
            $newFilename = md5((string)rand()) . "." . $extension;
            $newFullFilename = SCREENSHOT_PATH . "/" . $newFilename;
            $fileSize = $_FILES["screenshot"]["size"];


            throw new InvalidTypeFileException("La foto no és d'un tipus permés");

            if (!move_uploaded_file($tempFilename, $newFullFilename)){
                throw new FileUploadException("No s'ha pogut moure la foto");
            }

            $data["screenshot"] = $newFilename;

        } else
            throw new NoUploadedFileException("Cal pujar una imatge");
    } catch (FileUploadException $e) {
        $errors[] = $e->getMessage();
    }
}

if(empty($errors)){
    $pdo = new PDO("mysql:host=mysql-server; dbname=ticket; charset=utf8", "root", "secret");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare("INSERT INTO ticket (title, message, email, created, screenshot) VALUES (:title, :message, :email, :created, :screenshot)");
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    $data["created"] = date("Y-m-d H:i:s");

    if($stmt->execute($data)){
        $_SESSION["message"] = "S'ha inserit amb èxit l'incidència amb id ({$pdo->lastInsertId()})";
        header("Location: index.php");
        exit();
    }
}

$_SESSION["data"] = $data;
$_SESSION["errors"] = $errors;
header("Location: index.php");
exit();
