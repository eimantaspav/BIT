<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="daugybos_lentele.css">
    <title>Document</title>
</head>

<body>

    <form class="form" method="post">
        <label for="fname">Daugybos lentelės iki:</label><br>
        <input class="input" type="number" name="input"><br>
        <input class="button" type="submit" name="sub" value="SUKURTI">
    </form>


</body>
<?php
if (isset($_POST['sub'])) {
    echo ('<div class="allTables">');
    $input = $_POST['input'];
    for ($i = 1; $i <= $input; $i++) {
        for ($j = 1; $j <= $input; $j++) {
            if ($j == 1) {
                echo ('<div class="table">' . $j . ' x ' . $i . ' = ' . $j * $i . '<br>');
            } else if ($j == $input) {
                echo ($j . ' x ' . $i . ' = ' . $j * $i . '<br>' . '</div>');
            } else if ($j != $input) {
                echo ($j . ' x ' . $i . ' = ' . $j * $i . '<br>');
            }
        }
    }
    echo ('</div>');
}


?>

</html>
<?php
