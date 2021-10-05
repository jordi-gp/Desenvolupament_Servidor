<?php
declare(strict_types=1);

?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Activitat 241 Funció d'Imatges I</title>
</head>
<body>
<h1>Activitat 241 Funció d'Imatges I</h1>

<?php

    function imatge(string $url, string $alt = "No alternative text", int $width = 0, int $height=0): string {

        $img = "<img src=\"$url\" alt=\"$alt\" ";

        if ($width > 0) {
            $img .= " width=\"$width\"";
        }

        if ($height > 0) {
            $img .= " height=\"$height\" ";
        }

        $img .= "/>";
        return $img;

    }

    echo imatge("https://cdn4.josefacchin.com/wp-content/uploads/2020/02/como-quitar-el-fondo-de-una-imagen.png", "Programador", 250, 150);
    echo imatge("https://cdn4.josefacchin.com/wp-content/uploads/2020/02/como-quitar-el-fondo-de-una-imagen.png", "Programador");
?>

</body>
</html>
