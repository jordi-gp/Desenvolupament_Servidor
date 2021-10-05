<?php
// @JORDI & SAORO Escriviu aquí el vostre nom

$rutaCartes = 'cards';

$fitxers = array_diff(scandir($rutaCartes), array('.', '..'));
$fitxers2 = $fitxers;
$fitxers3 = $fitxers;

$fitxers3aux = ["clubs", "diamonds", "hearts", "spades"];

unset($fitxers2[42]);
unset($fitxers3[42]);

?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="utf-8">
    <title>
        Cartes.
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

        .flex {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .flex-item {
            flex: 0 1 50px;
        }

        img {
            width: 100%;
            height: auto;
        }

    </style>
</head>

<body>
<h1>Cartes</h1>
<h2>Activitat 1</h2>
<div class="flex">
    <!-- Aquest element conté cada imatge -->
    <?php shuffle($fitxers); ?>
    <?php foreach ($fitxers as $cartes): ?>
        <div class="flex-item">
            <img src=<?= $rutaCartes . '/' . $cartes ?>></img>
        </div>
    <?php endforeach; ?>
</div>

<h2>Activitat 2</h2>
<div class="flex">
    <!-- Aquest element conté cada imatge -->
    <?php asort($fitxers2);?>
    <?php foreach ($fitxers2 as $cartes): ?>
        <div class="flex-item">
            <img src=<?= $rutaCartes . '/' . $cartes ?>></img>
        </div>
    <?php endforeach; ?>
</div>

<h2>Activitat 3</h2>
<div class="flex">
    <!-- Aquest element conté cada imatge -->
    <?php foreach ($fitxers3 as $item): ?>
        <?php $palo1 = explode("_of_", $item); ?>
    <?php $palo = $palo1[1] ?>
            <?php array_multisort(array_column($palo1,1), SORT_ASC, $palo1) ?>
            <div class="flex-item">
                <img src=<?= $rutaCartes . '/' . $palo1[0] . '_of_' . $palo1[1] ?>></img>
            </div>
    <?php endforeach; ?>
</div>
<footer>
    <p>Escriviu aquí el nom</p>
</footer>
</body>
</html>
