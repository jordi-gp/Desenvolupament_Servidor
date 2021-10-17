<?php

// Inicialitze les variables perquè existisquen en tots els possibles camins
// Sols emmagatzameré en elles valors vàlids.
// Acumularé els errors en un array per a mostrar-los al final.
// Use la sintaxi alternativa de les estructures de control per a la part de vistes.
// Cree funció clean per a netejar valors


require "helpers.php";

$firstname = "";
$lastname = "";
$phone = "";
$email = "";
$imatge = "";
$genre = "";
$hobbies = [];
$contactTime = [];

$genere = array(
    "H" => "Home",
    "D" => "Dona",
    "NB" => "No Binari"
);

$hobbies1 = array(
    "Hobbie1" => "Lectura",
    "Hobbie2" => "Programació",
    "Hobbie3" => "Ciclisme",
    "Hobbie4" => "Running"
);

$contactTime1 = array(
    "range-1" => "Primer Hora",
    "range-2" => "Segon Hora",
    "range-3" => "Tercer Hora",
    "range-4" => "Cuarta Hora"
);


$errors = [];

// per a la vista necessitem saber si s'ha processat el formulari
$isPost = false;

if (isPost()) {

    $isPost = true;

    if (validate_string($_POST["firstname"], 1, 25 )){
        $firstname = clear($_POST["firstname"]);
    } else {
        $errors[] = "Error en validar el nom";
    }

    /*    if (empty($_POST["firstname"])) {
            $errors[] = "Nombre requerido";
        } else {
            if (strlen($_POST["firstname"]) > 25) {
                $errors[] = "Nombre no valido, no puede superar los 25 carácteres";
            } else {
                $firstname = clear($_POST["firstname"]);
            }
        }*/

    if (validate_string($_POST["lastname"], 3, 50)){
        $lastname = clear($_POST["lastname"]);
    } else {
        $errors[] = "Apellido vacio o erròneo";
    }

    if (empty($_POST["phone"])) {
        $errors[] = "Telèfon requerit";
    } else {
        if (preg_match("/^\d{9}$/", $_POST["phone"])) {
            $phone = $_POST["phone"];
        } else {
            $errors[] = "Tlfn no valido, deben ser exactamente 9 digitos";
        }
    }

    $emailTest = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    if (empty($emailTest)) {
        $errors[] = "Correu electrònic no indicat o erroni";
    } else {
        $email = $emailTest;
    }

    if (empty($_POST["genre"])) {
        $errors[]="Has de triar un gènere";
    } else {
        $genre = $_POST["genre"];
    }

    if (is_empty($_POST["hobbies"] ?? [])){
        $errors[]="Has de triar almenys un hobbie";
    } else {
        $hobbies = $_POST["hobbies"];
    }

    if (is_empty($_POST["contact-time"] ?? [])) {
        $errors[]="Has de triar almenys un hora";
    } else {
        $contactTime=$_POST["contact-time"];
    }

    $nom = $_FILES["image"]["name"];
    $ruta = $_FILES["image"]["tmp_name"];

    if (!file_exists("upload")){
        if(file_exists("upload")){
            if (move_uploaded_file($ruta, "upload/".$nom)){
                echo "Archivo guardado correctamente";
            }else{
                echo "Archivo no encontrado";
            }
        }
    }else{
        if(file_exists("upload")){
            if (move_uploaded_file($ruta, "upload/".$nom)){
                echo "Archivo guardado correctamente";
            }else{
                echo "Archivo no encontrado";
                echo $_FILES["image"]["size"];
            }
        }
    }
}

require "266Formulari.view.php";
