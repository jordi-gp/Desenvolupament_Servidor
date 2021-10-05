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

        #enviar{
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Activitats amb Formularis II</h1>

    <form action="formularis262.php" method="POST">
        <p>Introdueix el teu nom</p>
        <input type="text" name="nombre" size="15" required/>
        <p>Introdueix el teu cognom</p>
        <input type="text" name="apellido" size="15" required/>
        <p>Introdueix el teu número de telefon</p>
        <input type="text" name="telefono" size="15" required/>
        <p>Introdueix el teu correu electrònic</p>
        <input type="text" name="correo" size="25" required/>

        <br><br><input type="submit" value="Enviar" id="enviar" />

    </form>

    <table>
        <tr>
            <th>Camp</th>
            <th>Informació rebuda</th>
        </tr>

        <?php

            if($_SERVER["REQUEST_METHOD"] === "POST"){
                $nom = $_POST["nombre"];
                $apellido = $_POST["apellido"];
                $telefono = $_POST["telefono"];
                $correo = $_POST["correo"];

                //EVITAR ESPAIS EN BLANC
                $nom = trim($nom);
                //SANEJAMENT DEL CODI PER EVITAR ETIQUETES HTML/JS/ETC...
                $nom = filter_var($nom, FILTER_SANITIZE_STRING);

                if(strlen($nom) <= 0 || strlen($nom) >= 25){
                    echo "<p>El camp nom es obligatori!</p>";
                }

                if(strlen($apellido) <= 0 || strlen($nom) >= 25){
                    echo "<p>El camp apellido es obligatori!</p>";
                }

                //PER AL NÚMERO DE TELÈFON
                $telefono = filter_var($telefono, FILTER_VALIDATE_REGEXP, ["options" => ["regexpt" => "/^\d{9}$/"]]);
                echo "<p>Telefono erroeno!</p>";


                echo "<tr><th>Nombre</th><td>$nom</td></tr>";
                echo "<tr><th>Apellido</th><td>$apellido</td></tr>";
                echo "<tr><th>N. Teléfono</th><td>$telefono</td></tr>";
                echo "<tr><th>Correo</th><td>$correo</td></tr>";
            }

        ?>
    </table>
</body>
</html>