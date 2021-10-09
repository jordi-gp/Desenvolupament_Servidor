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
        <label for="genre">Génere</label><br>
        <?php foreach ($genere as $generes){ ?>
            <input id="genre" type="radio" name="genre" value="<?=$generes?>"
            <?php if($generes == $genre){
                echo "checked";
            }
            ?>>
            <label><?=$generes?></label>
        <?php } ?>
    </div>

    <div>
        <label for="hobbie">Hobbies</label><br>
        <?php foreach ($hobbies1 as $hobbie) { ?>
            <input id="hobbie" type="checkbox" name="hobbies[]" value="<?=$hobbie?>"
                <?php if (is_selected($hobbie, $hobbies)) {
                    echo "checked";
                }
                ?>>
            <label><?=$hobbie?></label>
        <?php } ?>
    </div>

    <div>
        <p>Contact time</p>
        <select name="contact-time[]" multiple="multiple">
            <?php foreach ($contactTime1 as $time){ ?>
                <option value="<?= $time?>"
                    <?= is_selected($time, $contactTime) ? "selected" : ""; ?>>
                <label for="$time"><?= $time ?></label>
            <?php } ?>
        </select>
    </div>
    <div>
        <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
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
            <td><?=$genre?></td>
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
