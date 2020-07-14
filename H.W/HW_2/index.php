<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="KMI.css">
  <title>Document</title>
</head>

<body>

  <!-- DUOMENŲ ĮVEDIMO FORMA -->
  <div class="suvedimas">
    <p>Įveskite duomenis</p>
    <div class="ugis_svoris">
      <label for="ugis">Jūsų ūgis (metrais, pvz.: 1.68)*:</label><br>
      <label for="svoris">Jūsų svoris (kilogramais, pvz.: 50)*:</label>
    </div>

    <!-- PHP GAUNA GAUNA DUOMENIS IR JUOS PAVERCIA KINTAMAISIAIS -->
    <?php
    if ($_GET['submit']) {
      $ugis = $_GET['ugis'];
      $svoris = $_GET['svoris'];
      $kmi = $svoris / ($ugis * $ugis);
    }

    //  REKOMENDACIJOS
    if ($ugis <= 0 || $ugis > 2.5 || $svoris <= 0 || $svoris > 300 ) {
      $patarimas = 'Nebekvailiokite.';
    } else if ($kmi < 18.5) {
      $patarimas = 'Daugiau valgykite.';
    } else if ($kmi >= 18.5 && $kmi < 25) {
      $patarimas = 'Nieko nekeiskite.';
    } else if ($kmi >= 25 && $kmi < 30) {
      $patarimas = 'Mažiau valgykite, daugiau sportuokite.';
    } else if ($kmi >= 30) {
      $patarimas = 'Drąstiškai keiskite dietą, kreipkitės į specialistą.';
    }
    ?>

    <!-- // UGIO IR SVORIO FORMA -->
    <div class="forma">
      <form action="index.php" method="GET">
        <input type="text" id="ugis" name="ugis"><br>
        <input type="text" id="svoris" name="svoris"><br>
        <input type="submit" value="Submit" name="submit">
      </form>

    </div>
  </div>

  <!-- KMI PATEIKIMAS -->
  <div class="reiksme">
    <?php
    if ($_GET['submit']) {
      echo ('Jūsų KMI yra: ' . round($kmi, 2));
      echo "<br>";
      echo($patarimas);
    }
    ?>


    <!-- PAAISKINIMAI -->
    <p>Kokia KMI svorio indekso reikšmė?</p>


    <div class="KMI">
      <h3>KMI</h3>
      <p>Mažiau kaip 18.5 - nepakankamas svoris.</p>
      <p>18.5 ir daugiau, mažiau kaip 25 - normalus svoris</p>
      <p>25 ir daugiau, mažiau kaip 30 - antsvoris</p>
      <p>30 ir daugiau - nutukimas.</p>
    </div>
  </div>

</body>

</html>