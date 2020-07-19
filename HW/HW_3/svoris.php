<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    // SUKURIAMAS ARRAY SU VALUE VARDU IR KEY SVORIU 
    $people = array(
        "Mikelandzelas" => 100,
        "Rafaelis" => 130, 
        "Donatelas" => 120, 
        "Leonardas" => 107
    );

    // ARRAY ISSPAUSDINAMAS
    foreach ($people as $key => $value) {
        echo "$key sveria $value kg <br>";
    }
    echo ('<br>');

    //   RANDAMAS LENGVIAUSIAS 
    foreach ($people as $key => $value) {
        if ($value == min($people)) {
            echo "$key sveria maziausiai - $value kg <br>";
        }
    }
    echo ('<br>');


    //   RANDAMAS SUNKIAUSIAS 
    foreach ($people as $key => $value) {
        if ($value == max($people)) {
            echo "$key sveria daugiausiai - $value kg <br>";
        }
    }
    echo ('<br>');


    // SURIKIUOTA PAGAL SVORI 
    echo ('Surikiuoti pagal svori:');
    echo ('<br>');

    asort($people);
    foreach ($people as $key => $value) {
        echo "$key sveria $value kg <br>";
    }
    echo ('<br>');

    // AR GALI KILTI LIFTU? 
    $bendrasSvoris = array_sum($people);
    if ($bendrasSvoris <= 500) {
        echo ("Bendras svoris - $bendrasSvoris kg, liftu kilti galima.");
    } else {
        echo ("Bendras svoris - $bendrasSvoris kg, liftu kilti  DRAUDŽIAMA!!!.");
    }
    ?>

</body>

</html>