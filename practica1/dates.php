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
    <h1>Activitats sobre dates amb PHP</h1>

    <h2>Activitat 3</h2>

        <ol>
            <?php
                //Exercici 1
                echo "<li>"."Mostra la data actual i hora actuals amb el format 'dd/mm/yyyy hh:mm:ss'."."</li>";
                echo "<p>"."La data actual es ".date("d/m/Y")."."."</p>";
                echo "<p>"."L'hora actual es ".date("h:i:s")."."."</p>";

                //Exerici 2
                echo "<li>"."Mostra el nom de la zona horària que s'utilitza per defecte."."</li>";
                echo "<p>"."El nom de la zona horària utilitzada per defecte es ".date_default_timezone_get()."."."</p>";

                //Exercici 3
                echo "<li>"."Mostra la data que serà d'ací 45 dies"."</li>";
                $dataAct = date("Y/m/d");
                echo "<p>"."Dins de 45 díes la data serà ".date("d/m/Y", strtotime(($dataAct . " + 45 days")))."."."</p>";

                //Exercici 4
                echo "<li>"."Mostra el nombre de dies que han pasat des de l'1 de gener."."</li>";
                $data = mktime(0, 0, 0, 1, 1, 2021);
                $diferencia = time() - $data;

                $diferenciaEnDies = ((($diferencia /60) /60) /24);
                /*
                 * Amb la primera divisió s'obtenen els minuts
                 * Amb la segona divisió s'obtenen els segons
                 * Amb la tercera divisió s'obtenen els dies
                 */
                echo "<p>"."Han pasat ". round($diferenciaEnDies). " dies desde l'1 de gener de 2021."."</p>";

                //Exercici 5
                echo "<li>"."Mostra la data i hora actuals de Nova York"."</li>";
                $zonaHoraria = date_default_timezone_set("America/New_York");
                echo "<p>"."La data actual de Nova York es ".date("d/m/Y")."."."</p>";
                echo "<p>"."L'hora actual de Nova York es ".date("H:i:s")."."."</p>";

                //Exercici 6
                echo "<li>"."Mostra el dia de la setmana que era l'1 de gener d'enguany."."</li>";
                echo "<p>"."The first day of January in 2021 was ".date("l", strtotime("1 January 2021"))."."."</p>";

            ?>
        </ol>

</body>
</html>
