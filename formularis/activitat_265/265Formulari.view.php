<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="utf-8">
    <title>Actividad 274: Formulari</title>
    <meta name="description" content="PHP, PHPStorm">
    <meta name="author" content="Homer Simpson">
    <style>
        body {
            font-family: "Bitstream Vera Serif"
        }

        #infPersonal {
            border: 1px solid black;
            margin-right: 75%;
            margin-bottom: 20px;
        }

        #sexe {
            border: 1px solid black;
            margin-right: 75%;
            margin-bottom: 20px;
        }

        #hobbies {
            border: 1px solid black;
            margin-right: 75%;
            margin-bottom: 20px;
        }

        #enviar {
            margin-top: 20px;
        }
    </style>
</head>

<body>
<form action="" method="post">
        <pre>
        <?php
        if (!empty($errors))
            print_r($errors)
        ?>
        </pre>

    <div id="infPersonal">
        <div>
            <label for="firstname">Name</label>
            <input type="text" name="firstname" value="<?=$firstname?>">
        </div>
        <div>
            <label for="lastname">Cognoms</label>
            <input type="text" name="lastname" value="<?=$lastname?>">
        </div>
        <div>
            <label for="phone">Telèfon</label>
            <input type="text" name="phone" value="<?=$phone?>">
        </div>
        <div>
            <label for="email">Correu electrònic</label>
            <input type="text" name="email" value="<?=$email?>">
        </div>
    </div>
    <div id="sexe">
        <div>
            <input type="radio" name="genere" id="home" value="" />
            <label for="home">Home</label>
        </div>
        <div>
            <input type="radio" name="genere" id="dona" value="" />
            <label for="dona">Dona</label>
        </div>
        <div>
            <input type="radio" name="genere" id="nobinari" value="" />
            <label for="nobinari">No Binari</label>
        </div>
    </div>
    <div id="hobbies">
        <div>
            <input type="checkbox" name="hobbie1" id="hobbie1" value="" />
            <label for="hobbie1">Anar a Esmorsar</label>
        </div>
        <div>
            <input type="checkbox" name="hobbie2" id="hobbie2" value="" />
            <label for="hobbie2">Llegir</label>
        </div>
        <div>
            <input type="checkbox" name="hobbie3" id="hobbie3" value="" />
            <label for="hobbie3">Pintar</label>
        </div>
        <div>
            <input type="checkbox" name="hobbie4" id="hobbie4" value="" />
            <label for="hobbie4">Programar</label>
        </div>
    </div>
    <label>
        <label for="horaris">Contact-Time</label><br>
        <select multiple name="horaris" id="horaris">

            <option value="1">Primer hora (08:00 a 10:00)</option>
            <option value="2">Abans de dinar (12:00 a 13:00)</option>
            <option value="3">Després de dinar (14:00 a 16:00)</option>
            <option value="4">Per la nit(20:00 a 22:00)</option>
        </select>
    </div>
    <div id="enviar">
        <input type="submit" value="Enviar">
    </div>
</form>

<?php if (empty($errors) && $isPost): ?>
    <table>
        <tr>
            <th>Nom</th>
            <td><?=$firstname?></td>
        </tr>
        <tr>
            <th>Cognom</th>
            <td><?=$lastname?></td>
        </tr>
        <tr>
            <th>Telèfon</th>
            <td><?=$phone?></td>
        </tr>
        <tr>
            <th>Correu</th>
            <td><?=$email?></td>
        </tr>
        <tr>
            <th>Sexe</th>
            <td><?=$sexe?></td>
        </tr>
        <tr>
            <th>Hobbies</th>
            <td><?=$hobbies?></td>
        </tr>
        <tr>
            <th>Horari</th>
            <td><?=$horari?></td>
        </tr>
    </table>
<?php endif ?>
</body>

</html>
