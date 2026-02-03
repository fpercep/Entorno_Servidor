<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <?php

    session_start();
    if (!isset($_SESSION["visitas"])) {
        $_SESSION["visitas"] = 0;
    }
    $_SESSION["visitas"]++;
    echo"Visitas: " . $_SESSION["visitas"];
    ?>

    <form action="" method="post">
        <button name="reiniciar">Reiniciar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST["reiniciar"])) {
            session_destroy();
            header("Location: " . $_SERVER['PHP_SELF']);
            header("refresh:0");
            exit;
        }
    }

    ?>
</body>
</html>