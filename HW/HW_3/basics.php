<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="basics.css" type="text/css">
    <title>Document</title>
</head>

<body>
    <?php

    // UZDUOTYS SU VIENMACIU MASYVU
    // SUKURIMAS
    echo ('<p>SUKURIMAS</p><br>');
    $arr1 = array("a", "b", "c");
    $arr2 = array(1, 2, 3);
    print_r($arr1);
    echo ('<br>');
    print_r($arr2);
    echo ('<br> <br>');

    // REIKMES NUSKAITYMAS
    echo ('<p>REIKSMES NUSKAITYMAS</p><br>');
    echo ($arr1[0]);
    echo ('<br>');
    echo ($arr2[0]);
    echo ('<br> <br>');


    // REIKSMES PAKEITIMAS
    echo ('<p>REIKSMES PAKEITIMAS</p><br>');
    $arr1[0] = "d";
    $arr2[0] = 4;
    echo ($arr1[0]);
    echo ('<br>');
    echo ($arr2[0]);
    echo ('<br> <br>');



    // NAUJOS REIKSMES IDEJIMAS I GALA
    echo ('<p>NAUJOS REIKSMES IDEJIMAS I GALA</p><br>');
    array_push($arr1, '+ i gala');
    array_push($arr2, 1337);
    print_r($arr1);
    echo ('<br>');
    print_r($arr2);
    echo ('<br> <br>');


    // REIKSMIU PASIEKIMAS/ISVARDINIMAS 
    echo ('<p>REIKSMIU PASIEKIMAS/ISVARDINIMAS</p><br>');

    for ($i = 0; $i < count($arr1); $i++) {
        echo ($arr1[$i]);
    }
    echo ('<br>');

    for ($i = 0; $i < count($arr2); $i++) {
        echo ($arr2[$i]);
    }

    echo ('<br>');

    print_r($arr1);
    echo ('<br>');
    print_r($arr2);
    echo ('<br> <br>');


    // NARIU KIEKIS MASYVE (JO ILGIS)
    echo ('<p>NARIU KIEKIS MASYVE (JO ILGIS)</p><br>');
    echo (count($arr1));
    echo ('<br>');
    echo (count($arr2));
    echo ('<br> <br>');


    // REIKSMES ISTRINIMAS
    echo ('<p>REIKSMES ISTRINIMAS</p><br>');
    array_splice($arr1, 2, 3);
    array_splice($arr2, 2, 3);
    print_r($arr1);
    echo ('<br>');
    print_r($arr2);
    echo ('<br> <br>');


    // PAIESKA
    // Grazina indeksa
    echo ('<p>PAIESKA (GRAZINA IDEKSA)</p><br>');
    echo (array_search('d', $arr1));
    echo ('<br>');
    echo (array_search(4, $arr2));
    echo ('<br> <br>');



    // RIKIAVIMAS
    echo ('<p>RIKIAVIMAS</p><br>');
    sort($arr1);
    print_r($arr1);
    echo ('<br>');
    sort($arr2);
    print_r($arr2);
    echo ('<br>');
    array_push($arr2, 5);
    echo ('<br> <br>');


    // FILTRAVIMAS
    // Ar lyginis?
    echo ('<p>FILTRAVIMAS</p><br>');

    function findEven($arr)
    {
        if ($arr % 2 == 0) {
            return true;
        } else {
            return false;
        }
    }

    // Ar nelyginis?
    function findOdd($arr)
    {
        if ($arr % 2 !== 0) {
            return true;
        } else {
            return false;
        }
    }

    // Filtruojam is spausdinam
    $even = array_filter($arr2, "findEven");
    $even = array_values(array_filter($even));
    print_r($even);
    echo ('<br>');
    $odd = array_filter($arr2, "findOdd");
    print_r($odd);
    echo ('<br> <br>');


    // REIKSMES IDEJIMAS I VIDURI AR PRADZIA
    echo ('<p>REIKSMES IDEJIMAS I VIDURI AR PRADZIA</p><br>');
    $arr3 = [1, 2, 5, 6, 7];
    $arr4 = [3, 4];
    array_splice($arr3, 0, 0, $arr4);
    echo ('<br>');
    print_r($arr3);
    echo ('<br> <br>');

    // REIKSMIU SUMA
    echo ('<p>REIKSMIU SUMA</p><br>');
    echo(array_sum($arr3));
    echo ('<br> <br>');

    // ARRAY MIN IR MAX
    echo ('<p>REIKSMIU MIN IR MAX</p><br>');
    echo(min($arr3));
    echo ('<br>');
    echo(max($arr3));
    echo ('<br> <br>');

   






















    ?>

</body>

</html>