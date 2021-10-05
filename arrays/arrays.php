<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Activitats amb Arrays</h1>

    <h2>Activitat 4</h2>

        <ol>
            <?php
                //Exercici 1
                echo "<li>"."Crea un array amb els noms de diersos alumnes de la classe incloent el teu."."</li>";

                $alumnes = ["Romera", "Jordi", "Saoro", "Joan"];

                print_r($alumnes);

                //Exercici 2
                $alumnes2 = ["Romera", "Jordi", "Saoro", "Joan"];
                echo "<li>"."Mostra el nombre d'elements que té l'array (count)."."</li>";
                echo "<p>"."L'array conté ".count($alumnes2)." elements."."</p>";

                //Exercici 3
                echo "<li>"."Crea una cadena de text que continga els noms dels alumnes existents en l'array separats
                per un espai i mostra-la (implode)."."</li>";
                $alumnes3 = ["Romera", "Jordi", "Saoro", "Joan"];

                $espai = implode (" ", $alumnes3);
                echo "<p>".$espai."</p>";

                //Exercici 4
                echo "<li>"."Mostra l'array en un ordre aleatori diferent al que ho vas crear (shuffle)."."</li>";
                $alumnes4 = ["Romera", "Jordi", "Saoro", "Joan"];

                shuffle($alumnes4);

                foreach ($alumnes4 as $alumne){
                    echo $alumne." ";
                }

                //Exercici 5
                echo "<li>"."Mostra l'array ordenat alfabèticament (sort)."."</li>";
                $alumnes5 = ["Romera", "Jordi", "Saoro", "Joan"];

                sort($alumnes5);

                foreach ($alumnes5 as $alumne){
                    echo "<p>".$alumne." "."</p>";
                }

                //Exercici 6
                echo "<li>"."Mostra els alumnes el nom dels quals continga almenys una 'a' (array_filter)."."</li>";
                $alumnes6 = ["Romera", "Jordi", "Saoro", "Joan"];

                foreach ($alumnes6 as $alumne){
                    //echo "<p>".$alumne."</p>";
                    //echo substr_count($alumne, "a");

                    if (substr_count($alumne, "a") >= 1){
                        echo $alumne." ";
                    }
                }

                /*$resultat = array_filter($alumnes2, function ($nombre){
                    return $nombre["nom"] (substr_count($nombre["nom"], "a") >= 1);
                });*/

                //Exercici 7
                echo "<li>"."Mostra l'array en l'ordre invers al que es va crear."."</li>";
                $alumnes7 = ["Romera", "Jordi", "Saoro", "Joan"];

                echo "<p>"."L'ordre amb el que s'ha creat l'array en un principi es el següent"."</p>";

                foreach ($alumnes7 as $alumne){
                    echo $alumne . " ";
                }

                echo "<p>"."L'ordre de l'array de forma invertida a com s'ha creat es el següent."."</p>";
                rsort($alumnes7);

                foreach ($alumnes7 as $alumne){
                    echo $alumne . " ";
                }

                //Exercici 8
                echo "<li>"."Mostra la posició que té el teu nom en l'array (array_search)."."</li>";
                $alumnes8 = ["Romera", "Jordi", "Saoro", "Joan"];

                $posicio = array_search('Jordi', $alumnes8);

                echo "<p>"."El meu nom es troba en la posició ".$posicio." de l'array."."</p>";

            ?>
        </ol>
</body>
</html>