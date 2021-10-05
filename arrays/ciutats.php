<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Activitat 2.3.2 Arrays Associatius</title>
    <style>
        <?php include 'decoracio.css';?>
    </style>
</head>
<body>

<table>

    <h2>Activitat d'Arrays Associatius</h2>

    <tr>
        <th>Ubicació</th>
        <th>Nombre d'habitants</th>
    </tr>

<?php
    $dates = array(
        "Madrid" => ["MAD", 3223334],
        "Sevilla" => ["MAD", 688711],
        "Murcia" => ["MU", 447182],
        "Málaga" => ["AN", 571026],
        "Zaragoza" => ["AR", 666880],
        "València" => ["CV", 791413],
        "Barcelona" => ["CAT", 1620343]
    );

    $sum = 0;

    foreach ($dates as $data => $infor){
        echo "<tr><th>$data</th><td>$infor[1]</td></tr>";
        $sum += $infor[1];

    }
    echo "<tr><th>Total de Població</th><td>$sum</td></tr>";
?>

</table>

</body>
</html>