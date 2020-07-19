<?php

// <!-- 1. Jei norime išvardinti visus narius atskiriant juos kableliais: (pvz: 1, 2, 3),
// tačiau nenorime turėti nereikalingų kablelių pradžioje (pvz: , 1, 2, 3), bei pabaigoje (pvz: 1, 2, 3, ). 
// Kaip tai pasiekti? Atlikite su paprastu indeksiniu masyvu bei su asociatyviuoju masyvu. -->

echo ('1 užd.' . '<br><br>');
$arr1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

for ($i = 0; $i < count($arr1); $i++) {
    if ($i == count($arr1) - 1) {
        echo ($arr1[$i]);
    } else {
        echo ($arr1[$i] . ', ');
    }
}
echo ('<br>');

$arr2 = array(
    "a" => 1,
    "b" => 2,
    "c" => 3,
    "d" => 4,
    "e" => 5,
    "f" => 6,
    "g" => 7,
    "h" => 8,
    "i" => 9,
    "j" => 10
);


$keys = array_keys($arr2);

for ($i = 0; $i < count($keys); $i++) {
    if ($i == count($keys) - 1) {
        echo ($keys[$i] . ' ' . $arr2[$keys[$i]]);
    } else {
        echo ($keys[$i] . ' ' . $arr2[$keys[$i]] . ", ");
    }
}
echo ('<br>');
echo ('<br>');



// <!-- 2. Matėme kaip išvardinti kiekvieną masyvo narį. Kaip reiktų išvardinti kas antrą?
//  Atlikite su paprastu indeksiniu masyvu bei su asociatyviuoju masyvu. -->

echo ('2 užd.' . '<br><br>');

for ($i = 0; $i < count($arr1); $i++) {
    if ($i == count($arr1) - 2 && $i % 2 == 0) {
        echo ($arr1[$i]);
    } else if ($i % 2 == 0) {
        echo ($arr1[$i] . ', ');
    }
}
echo ('<br>');

for ($i = 0; $i < count($arr1); $i++) {
    if ($i == count($arr1) - 1) {
        echo ($arr1[$i]);
    } else if ($i % 2 != 0) {
        echo ($arr1[$i] . ', ');
    }
}
echo ('<br>');
echo ('<br>');


$keys = array_keys($arr2);

for ($i = 0; $i < count($keys); $i++) {
    if ($i == count($keys) - 2 && $i % 2 == 0) {
        echo ($keys[$i] . ' ' . $arr2[$keys[$i]]);
    } else if ($i % 2 == 0) {
        echo ($keys[$i] . ' ' . $arr2[$keys[$i]] . ", ");
    }
}
echo ('<br>');


for ($i = 0; $i < count($keys); $i++) {
    if ($i == count($keys) - 1) {
        echo ($keys[$i] . ' ' . $arr2[$keys[$i]]);
    } else if ($i % 2 != 0) {
        echo ($keys[$i] . ' ' . $arr2[$keys[$i]] . ", ");
    }
}
echo ('<br>');
echo ('<br>');

// <!-- 3. ** Iš n-dimensinio skaičių masyvo, kuriame skaičiai nesikartoja pagaminkite 1-D masyvą, 
// su išrikuotais elementais (array flattening), pvz: [[5,3],[1,2,8]] → [1,2,3,5,8] -->

echo ('3 užd.' . '<br><br>');

$arr3 = array(
    array(
        array(1, 5, 6),
        array(2, 4, 9),
    ),
    array(
        array(3, 7, 8),
        array(12, 11, 10),
    )
);

echo '<pre>';
print_r($arr3);
echo '</pre>';

echo 'Spausdinu:' . '<br>';
for ($i = 0; $i < count($arr3); $i++) {
    if ($i == count($arr3) - 1) {
        echo (', ');
    }
    for ($j = 0; $j < count($arr3[$i]); $j++) {
        if ($j == count($arr3[$i]) - 1) {
            echo (', ');
        }
        for ($k = 0; $k < count($arr3[$i][$j]); $k++) {
            if ($k == count($arr3[$i][$j]) - 1) {
                echo ($arr3[$i][$j][$k]);
            } else {
                echo ($arr3[$i][$j][$k] . ', ');
            }
        }
    }
}
echo ('<br>');

echo 'Dedu į array:' . '<br>';

$vienmatis = array();
echo ('Pries:' . '<br>');


print_r($vienmatis);

for ($i = 0; $i < count($arr3); $i++) {
    for ($j = 0; $j < count($arr3[$i]); $j++) {
        for ($k = 0; $k < count($arr3[$i][$j]); $k++) {
            array_push($vienmatis, $arr3[$i][$j][$k]);
        }
    }
}
echo ('<br>');

echo ('Po:' . '<br>');
print_r($vienmatis);
echo ('<br>' . 'Issortintas:' . '<br>');
sort($vienmatis);
print_r($vienmatis);

