<?php declare(strict_types = 1); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Activitat 1 i 2 amb PHP</h1>

    <h2>Activitat 1</h2>

    <ol>
        <?php
            $nom = "Jordi Garcia";

            //Exercici 1
            echo "<li>"."Elimina els espais del principi i el final del nom si els haguera (trim)."."</li>";
            echo "<p>".$nom."</p>";
            echo "<p>".str_replace(" ", "", $nom)."</p>";

            //Exercici 2
            echo "<li>"."Elimina la lletra del principi i el final del nom si els hi haguera (trim)."."</li>";
            echo "<p>".$nom."</p>";
            echo "<p>".trim($nom, "J a")."</p>";

            //Exercici 3
            echo "<li>"."Mostra la variable nom en  majúscules, minúscules i amb la primera lletra en majúscula i les
            altres en minúscules (strtoupper, strtolower, ucfirst)."."</li>";
            //Tot amb majúscules
            echo "<p>".strtoupper($nom)."</p>";
            //Tot amb mínuscules
            echo "<p>".strtolower($nom)."</p>";
            //Primera lletra majúscula
            echo "<p>".ucfirst($nom)."</p>";

            //Exercici 4
            echo "<li>"."Mostra el codi ascii de la primera lletra del nom."."</li>";
            echo "<p>"."El codi ascii de la primera lletra del nom es ".ord("J")."."."</p>";

            //Exercici 5
            echo "<li>"."Mostra la longitud del nom (strlen)."."</li>";
            echo "<p>"."El nom té un total de ".strlen($nom)." caracters."."</p>";

            //Exercici 6
            echo "<li>"."Mostra el nombre de vegades que aparix la lletra 'a' (majúscula o minúscula substr_count)."."</li>";
            echo "<p>"."La lletra 'a' apareix un total de ".substr_count($nom, "a")." vegades."."</p>";
            echo "<p>"."La lletra 'A' apareix un total de ".substr_count($nom, "A")." vegades."."</p>";

            //Exercici 7
            echo "<li>"."Mostra la posició de la primera a existent en el nom, siga majúscula o minúscula (strpos).
            Si no hi ha cap mostrarà -1."."</li>";
            echo "<p>"."La primera lletra 'a' es troba en la posició número ".strpos($nom, "a")."."."</p>";

            //Exercici 8
            echo "<li>"."El maxteix, però amb l'última a."."</li>";
            echo "<p>"."L'última lletra 'a' del nom es troba en la posició ".strripos($nom, "a")."</p>";

            //Exercici 9
            echo "<li>"."Mostra el nom substituint la lletra o pel número zero, siga majúscula o minúscula (str_replace)."."</li>";
            echo "<p>".str_replace("o", "0", $nom)."</p>";

            //Exerici 10
            echo "<li>"."Indica si el nom comença per 'al' o no."."</li>";
            if(substr($nom, 0, 2) === "al"){
                echo "<p>"."El nom comença per 'al'."."</p>";
            } else {
                echo "<p>"."El nom no comença per 'al'."."</p>";
            }
        ?>
    </ol>

    <h2>Activitat 2</h2>
    <ol>
        <?php
            $url = "http://username:password@hostname:9090/path?arg=value#anchor";

            //Exercici 1
            echo "<p>"."Utilitza la funció 'parse_url' per a extreure de la url les següents parts:"."</p>";
            echo "<li>"."El protocol utilitzat (en l'exemple 'http')."."</li>";
            echo "<p>"."El protocol utilitzat es '".parse_url($url, PHP_URL_SCHEME)."'."."</p>";

            //Exercici 2
            echo "<li>"."El nom d'usuari (en l'exemple 'username')."."</li>";
            echo "<p>"."L'usuari de la url es '".parse_url($url, PHP_URL_USER)."'."."</p>";

            //Exercici 3
            echo "<li>"."El path de la url (en l'exemple '/path')."."</li>";
            echo "<p>"."El path de la url es '".parse_url($url, PHP_URL_PATH)."'."."</p>";

            //Exercici 4
            echo "<li>"."El querystring de la url (en l'exemple 'arg=value')."."</li>";
            echo "<p>"."El querystring de la url es '".parse_url($url, PHP_URL_QUERY)."'."."</p>";
        ?>
    </ol>
</body>
</html>

