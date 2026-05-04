<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP harjutused</title>
</head>
<body>
    <h1>Harjutus 04</h1>
    <form action="" method="get">
        Aasta: <input type="number" name="aasta">
        <input type="submit" value="Leia juubel">
    </form>
    <?php
    //Kauri Varbola 22.04.2026
    //Harjutus 04
    if (!empty($_GET['aasta'])) {
        $aasta = $_GET['aasta'];
        $vanus = 2026 - $aasta;
        if ($vanus % 5 == 0) {
            echo "Sul on juubeliaasta<br>";
        } else {
            echo "Sul pole juubeliaasta";
        }
    }
    ?><br>

    <form action="" method="get">
        Punktid: <input type="number" name="punktid">
        <input type="submit" value="Sinu hinne">
    </form>

    <?php
    if (empty($_GET['punktid'])) {
            echo "SISESTA OMA PUNKTID!";
    }
    
    if (!empty($_GET['punktid'])) {
        $punktid = $_GET['punktid'];
        if ($punktid >= 10) {
            echo "SUPER!";
        } elseif ($punktid >= 5) {
            echo "TEHTUD!";
        } elseif ($punktid < 5) {
            echo "KASIN!";
        } 
    }
    
    
    
    
    
    ?>
</body>
</html>