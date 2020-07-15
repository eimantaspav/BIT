<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    // UZDUOTYS SU VIENMACIU MASYVU
    // SUKURIMAS
    $arr1 = array("a", "b", "c");
    $arr2 = array(1, 2, 3);
    print_r($arr1);
    echo ('<br>');
    print_r($arr2);
    echo ('<br>');

    // REIKMES NUSKAITYMAS
    echo ($arr1[0]);
    echo ('<br>');
    echo ($arr2[0]);
    echo ('<br>');

    // REIKSMES PAKEITIMAS
    $arr1[0] = "d";
    $arr2[0] = 4;
    echo ($arr1[0]);
    echo ('<br>');
    echo ($arr2[0]);
    echo ('<br>');


    // NAUJOS REIKSMES IDEJIMAS I GALA
    array_push($arr1, '+ i gala');
    array_push($arr2, 1337);
    print_r($arr1);
    echo ('<br>');
    print_r($arr2);
    echo ('<br>');

    // REIKSMIU PASIEKIMAS/ISVARDINIMAS 
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
    echo ('<br>');

    // NARIU KIEKIS MASYVE (JO ILGIS)
    echo (count($arr1));
    echo ('<br>');
    echo (count($arr2));
    echo ('<br>');

    // REIKSMES ISTRINIMAS
    array_splice($arr1, 2, 3);
    array_splice($arr2, 2, 3);
    print_r($arr1);
    echo ('<br>');
    print_r($arr2);
    echo ('<br>');

    // PAIESKA
    // Grazina indeksa
    echo (array_search('d', $arr1));
    echo ('<br>');
    echo (array_search(4, $arr2));
    echo ('<br>');


    // RIKIAVIMAS
    sort($arr1);
    print_r($arr1);
    echo ('<br>');
    sort($arr2);
    print_r($arr2);
    echo ('<br>');
    array_push($arr2, 5);


    // FILTRAVIMAS
    // Ar lyginis?
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

    // REIKSMES IDEJIMAS I VIDURI AR PRADZIA
    $arr3 = [1, 2, 5, 6, 7];
    $arr4 = [3, 4];
    array_splice($arr3, 0, 0, $arr4);
    echo ('<br>');
    print_r($arr3);




















    ?>

</body>

</html>