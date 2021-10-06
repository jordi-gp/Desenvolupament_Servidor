<?php

// Inicialitze les variables perquè existisquen en tots els possibles camins
// Sols emmagatzameré en elles valors vàlids.
// Acumularé els errors en un array per a mostrar-los al final.
// Use la sintaxi alternativa de les estructures de control per a la part de vistes.
// Cree funció clean per a netejar valors

function clear(string $value): string {
    $value = trim($value);
    return htmlspecialchars($value);
}

$firstname = "";
$lastname = "";
$phone = "";
$email = "";
$errors = [];

// per a la vista necessitem saber si s'ha processat el formulari
$isPost = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $isPost = true;
    require "helper.php";
    validaNom($firstname);
    validaCognom($lastname);
    validaTel($phone);
    validaEmail($email);
}

require "265Formulari.view.php";
