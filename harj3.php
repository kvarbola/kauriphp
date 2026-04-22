<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP harjutused</title>
</head>
<body>
    <h1>Harjutus 03</h1>
    <!-- Kauri Varbola 22.04.2026
    Harjutus 03 -->
    <h2>Trapetsi pindala</h2>
    <form action="" method="get">
        a: <input type="number" name="t2"><br>
        b: <input type="number" name="t1"><br>
        h: <input type="number" name="t3"> <input type="submit" value="Sisesta"><br>
    </form>

    <?php
    if (!empty($_GET['t1'])) {
    $Tpindala = (($_GET['t1']) + ($_GET['t2'])) / ($_GET['t3']);
    
    printf('Trapetsi pindala on %0.1f <br>', $Tpindala,);
    }
    ?>
    <h3>Rombi ümbermõõt</h3>
    <form action="" method="get">
        d: <input type="number" name="t4"> <input type="submit" value="Sisesta"><br>
    </form>

    <?php
    if (!empty($_GET['t4'])) {
    $Rymbermoot = ($_GET['t4']) * 4;
    
    printf('Rombi ümbermõõt on %0.1f <br>', $Rymbermoot);
    }
    ?>
</body>
</html>