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
    if (!empty($_GET)) {
        $aasta = $_GET['aasta'];
        $vanus = 2026 - $aasta;
        if ($vanus % 5 == 0) {
            echo "Sul on juubeliaasta<br>";
        } else {
            echo "Sul pole juubeliaasta";
        }
    }
    ?>
</body>
</html>