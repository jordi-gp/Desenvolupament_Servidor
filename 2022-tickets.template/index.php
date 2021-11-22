<?php declare(strict_types=1); ?>
<?php session_start();

require "helpers.php";
if (isPost()){
    die("Aquest pàgina sols admet el mètode GET");
}

const MAX_SIZE = 1024*1000;

$errors = $_SESSION["errors"]?? [];
$message = $_SESSION["message"]??"";

$data = $_SESSION["data"]??[];

require "views/index.view.php";
