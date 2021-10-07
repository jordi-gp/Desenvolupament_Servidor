<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="utf-8">
    <title>Actividad 265: Formulari</title>
    <meta name="description" content="PHP, PHPStorm">
    <meta name="author" content="Vicent Jordà">
    <style>
        body { font-family: "Bitstream Vera Serif"}
    </style>
</head>

<body>
<form method="post" enctype="multipart/form-data">
        <pre>
        <?php
        print_r($_FILES);
        if (!empty($errors))
            print_r($errors)
        ?>
        </pre>
    <div>
        <label for="firstname">Name</label>
        <input id="firstname" type="text" name="firstname" value="<?=$firstname?>">
    </div>
    <div>
        <label for="lastname">Cognoms</label>
        <input id="lastname" type="text" name="lastname" value="<?=$lastname?>">
    </div>
    <div>
        <label for="phone">Telèfon</label>
        <input id="phone" type="text" name="phone" value="<?=$phone?>">
    </div>
    <div>
        <label for="email">Correu electrònic</label>
        <input id="email" type="text" name="email" value="<?=$email?>">
    </div>

    <div>
        <p>Génere</p>
        <label for="genre1">
            <input id="genre1" type="radio" name="genre" value="M"
                <?php if ("M" == $genre)
                    echo "checked";
                ?>>

            Home
        </label>

        <label for="genre2">
            <input id="genre2" type="radio" name="genre" value="W"
                <?php if ("W" == $genre)
                    echo "checked";
                ?>>
            Dona
        </label>
        <label for="genre3">
            <input id="genre3" type="radio" name="genre" value="N"
                <?php if ("N" == $genre)
                    echo "checked";
                ?>>

            No binari
        </label>
    </div>

    <div>
        <p>Hobbies</p>
        <label for="hobbie1">
            <input id="hobbie1" type="checkbox" name="hobbies[]" value="reading"
                <?php if (is_selected("reading", $hobbies))
                    echo "checked";
                ?>>
            Lectura
        </label>
        <label for="hobbie2">
            <input id="hobbie2" type="checkbox" name="hobbies[]" value="programming"
                <?php if (is_selected("programming", $hobbies))
                    echo "checked";
                ?>>

            Programació
        </label>
        <label for="hobbie3">
            <input id="hobbie3" type="checkbox" name="hobbies[]" value="cycling"
                <?php if (is_selected("cycling", $hobbies))
                    echo "checked";
                ?>>

            Ciclisme
        </label>
        <label for="hobbie4">
            <input id="hobbie4" type="checkbox" name="hobbies[]" value="running"
                <?php if (is_selected("running", $hobbies))
                    echo "checked";
                ?>>

            Running
        </label>
    </div>
    <div>
        <p>Contact time</p>
        <select name="contact-time[]" multiple="multiple">
            <option <?=is_selected("range-1", $contactTime)?"selected":""?> value="range-1">Primera hora (08:00 a 10:00)</option>
            <option <?=is_selected("range-2", $contactTime)?"selected":""?> value="range-2"> Abans de dinar (12:00 a 13:00)</option>
            <option <?=is_selected("range-3", $contactTime)?"selected":""?> value="range-3">Després de dinar (14:00 a 16:00)</option>
            <option <?=is_selected("range-4", $contactTime)?"selected":""?> value="range-4">Per la nit (20:00 a 22:00)</option>
        </select>
    </div>
    <div>
        <input type="hidden" name="MAX_FILE_SIZE" value="10240">
        <input type="file" name="image"/>
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
            <th>Genere</th>
            <td><?= $genre ?></td>
        </tr>
        <tr>
            <th>Hobbies</th>
            <td><?php foreach($hobbies as $hobbie):?>
                    <p><?=$hobbie?></p>
                <?php endforeach;?>
            </td>
        </tr>

        <tr><th>Contact time</th>
            <td><?php foreach($contactTime as $contact):?>
                    <p><?=$contact?></p>
                <?php endforeach;?>
            </td>
        </tr>
        <tr>
            <th>Correu</th>
            <td><?= $email ?></td>
        </tr>
        <tr>
            <th>Imatge</th>
            <td><img src="upload/<?=$nom?>"></td>
        </tr>
    </table>


<?php endif ?>


</body>

</html>
