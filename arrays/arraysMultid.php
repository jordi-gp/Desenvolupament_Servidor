<!doctype html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays Multidimensionals</title>
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

        td {
            border: 1px solid black;
            background-color: white;
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Arrays Multidimensionals</h2>

    <!--EXERCICI 1-->
    <p>a) Crea un array d'alumnes on cada element siga un altre array que continga nom i edat de l'alumne.</p>

    <?php
        $alumnes = [
            ['nom'=>"Jordi" ,'edat'=>21],
            ['nom'=>"Joan" ,'edat'=>21],
            ['nom'=>"Saoro" ,'edat'=>18],
            ['nom'=>"Romera" ,'edat'=>19],
        ];

        var_dump($alumnes);
    ?>

    <!--EXERCICI 2-->
    <p>b) Crea una taula HTML en la qual es mostren totes les dades dels alumnes.</p>

    <table>
        <tr>
            <th>Nom</th>
            <th>Edat</th>
        </tr>
        <?php
            foreach($alumnes as $alumne){
                echo "<tr><td>".$alumne['nom']."</td><td>".$alumne['edat']."</td></tr>";
            }

        ?>
    </table>

    <!--EXERCICI 3-->
    <p>c) Utilitza la funció array_column per a obtenir un array indexat que continga únicament els noms dels alumnes i mostra’ls per pantalla.</p>

    <pre>
    <?php
        $noms = array_column($alumnes, 'nom');

        echo print_r($noms);
    ?>
    </pre>

    <!--EXERCICI 4-->
    <p>d) Crea un array amb 10 números i utilitza la funció array_sum per a obtenir la suma dels 10 nombres.</p>

    <?php
        $numeros = [1,2,3,4,5,6,7,8,9,10];

        echo "<p>Els valors que conté l'array sobre la que s'ha aplicat la funcion 'array_sum()' són els següents.</p>";

        foreach($numeros as $numero){
            echo $numero." ";
        }

        echo "<p>La suma total dels valors de l'array es => ". array_sum($numeros) ."</p>";
    ?>

    <!--EXERCICI 5-->
    <p>e) Sense usar bucles for calcula la mitjana d'edat de l'alumnat.</p>

    <?php
        $valors = count($alumnes);
        $total = array_sum(array_column($alumnes, 'edat'));

        echo "<p>La mitjana d'edats es ". $total/$valors ."</p>";
    ?>

</body>
</html>