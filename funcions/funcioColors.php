<!doctype html>
<html lang="cat">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Activitat 243 Funció de Colors</title>
</head>
<body>
    <h1>Activitat 243 Funció de Colors</h1>

    <?php

        function colorins(int $numero1, int $numero2, int $numero3){
            $resultat1 = dechex($numero1);
            $resultat2 = dechex($numero2);
            $resultat3 = dechex($numero3);
            $resultatFinal = $resultat1.$resultat2.$resultat3;

            return $resultatFinal;
        }

        echo "<p>Color 1 => Roig</p>";
        echo strtoupper(colorins(255, 0, 0));

        echo "<p>Color 2 => Verd</p>";
        echo strtoupper(colorins(0, 255, 0));

        echo "<p>Color 3 => Blau</p>";
        echo strtoupper(colorins(0, 0, 255));

    ?>
</body>
</html>
