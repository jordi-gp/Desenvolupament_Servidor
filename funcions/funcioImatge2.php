<?php
    declare(strict_types=1);
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Activitat 242 Funció d'Imatges II</title>
</head>
<body>

<h1>Activitat 242 Funció d'Imatges II</h1>

<?php

    function imatge2(string $nom, string $alt = "No alternative text", int $width = 0, int $height=0): string {

        global $url;
        $url = "https://cdn4.josefacchin.com/wp-content/uploads/2020/02/";
        $nom = "como-quitar-el-fondo-de-una-imagen.png";
        $imatgeFinal = $url.$nom;

        $img = "<img src=\"$imatgeFinal\" alt=\"$alt\" ";

        if ($width > 0) {
            $img .= " width=\"$width\"";
        }

        if ($height > 0) {
            $img .= " height=\"$height\" ";
        }

        $img .= "/>";
        return $img;

    }

    echo imatge2("como-quitar-el-fondo-de-una-imagen.png", "Programador", 250);
?>
</body>
</html>
