<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="utf-8">
    <title>Actividad 274: Formulari</title>
    <meta name="description" content="PHP, PHPStorm">
    <meta name="author" content="Homer Simpson">
    <style>
        body { font-family: "Bitstream Vera Serif"}
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
    <div>
        <input type="radio" id="home" name="genere" value="home" />
        <label for="home">Home</label>
    </div>
    <div>
        <input type="radio" id="dona" name="genere" value="dona" />
        <label for="dona">Dona</label>
    </div>
    <div>
        <input type="radio" id="nobinari" name="genere" value="nobinari" />
        <label for="nobinari">No Binari</label>
    </div>
    <div>
        <input type="checkbox" id="hobbie1" name="hobbie1" value="esmorsar" />
        <label for="hobbie1">Anar a Esmorsar</label>
    </div>
    <div>
        <input type="checkbox" id="hobbie2" name="hobbie2" value="llegir" />
        <label for="hobbie2">Llegir</label>
    </div>
    <div>
        <input type="checkbox" id="hobbie3" name="hobbie3" value="pintar" />
        <label for="hobbie3">Pintar</label>
    </div>
    <div>
        <input type="checkbox" id="hobbie4" name="hobbie4" value="programar" />
        <label for="hobbie4">Programar</label>
    </div>
    <div>
        <input type="submit" value="Enviar">
    </div>
</form>

<?php if (empty($errors) && $isPost): ?>
    <table>
        <tr>
            <th>Nom</th>
            <td><?= $firstname ?></td>
        </tr>
        <tr>
            <th>Cognom</th>
            <td><?= $lastname ?></td>
        </tr>
        <tr>
            <th>Telèfon</th>
            <td><?= $phone ?></td>
        </tr>
        <tr>
            <th>Correu</th>
            <td><?= $email ?></td>
        </tr>
    </table>
<?php endif ?>
</body>

</html>
