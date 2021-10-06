<?php
    function validaNom(string $nombre): bool{
        if (empty($nombre)) {
            return false;
        }
        return true;
    }

    function validaCognom(string $lastName): bool{
        if (empty($lastName)) {
            return false;
        }
        return true;
    }

    function validaTel(string $phone): bool{
        if (empty($phone)) {
            return false;
        }
        return true;
    }

    function validaEmail($email): bool{
        $emailTest = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

        if (empty($emailTest)) {
            $errors[] = "Correu electrònic no indicat o erroni";
        } else {
            $email = $emailTest;
        }
        return $email;
    }


