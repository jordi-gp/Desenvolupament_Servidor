<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formularis amb PHP II</title>

    <style>
        table{
            border: 1px solid black;
            background-color: aquamarine;
        }

        tr{
            border: 1px solid black;
            background-color: cadetblue;
        }

        th{
            border: 1px solid black;
            background-color: cornflowerblue;
        }

        td{
            border: 1px solid black;
            background-color: white;
        }
    </style>
</head>
<body>

    <table>
        <tr>
            <th>Camp</th>
            <th>Informació rebuda</th>
        </tr>
        <?php
            $nom = $_GET["nombre"];
            $apellido = $_GET["apellido"];
            $telefono = $_GET["telefono"];
            $correo = $_GET["correo"];

            echo "<tr><th>Nombre</th><td>$nom</td></tr>";
            echo "<tr><th>Apellido</th><td>$apellido</td></tr>";
            echo "<tr><th>N. Teléfono</th><td>$telefono</td></tr>";
            echo "<tr><th>Correo</th><td>$correo</td></tr>";
        ?>
    </table>
</body>
</html>