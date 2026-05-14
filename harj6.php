<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Harjutused</title>
</head>
<body>
    <h1>Genereerimine</h1>

    <?php

    for ($arv = 1; $arv <= 100; $arv++) {
        echo $arv;
        echo ". ";
        if ($arv % 10 == 0) {
            echo "<br>";
        }
    }
    echo "<br><br>";
    // for ($tarn = 0; $tarn <= 10; $arv++) {
    //     echo "*";

    // }
    for ($i=1; $i < 100; $i++) { 
        echo "*";
        if ($i % 10 == 0) {
            echo "<br>";
        }
    }

    ?>
</body>
</html>
