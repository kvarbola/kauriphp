<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP harjutused</title>
</head>
<body>
    <h1>Harjutus 05</h1>
    <?php
    //Kauri Varbola 04.05.2026
    //Harjutus 05
    $nimed = array('Maria','Maarja','Rosanna','Roxanne','Chloe','Lyda','Inna','Melany');
    $kokku = count($nimed) - 1

    sort($nimed);
    foreach ($nimed as $nimi) {
        echo "$nimi <br>";
    }
    echo "<br>";
    echo "$nimed[0], $nimed[1], $nimed[2] <br>";
    echo "<br>";
    echo "$kokku <br>";
    echo "<br>";
    echo $nimed[rand(0, 7)];
    ?>

    <?php
    $autod = 
    
    
    
    ?>
</body>
</html>