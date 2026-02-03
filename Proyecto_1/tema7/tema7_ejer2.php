<?php
$modoActual = 0;
if (!isset($_COOKIE["modo"])) {
    setcookie("modo", "0", time() + (7 * 24 * 60 * 60));
} else {
    $modoActual = $_COOKIE["modo"];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['btClaro'])) {
        setcookie("modo", "0", time() + (7 * 24 * 60 * 60));
    }
    if (isset($_POST['btOscuro'])) {
        setcookie("modo", "1", time() + (7 * 24 * 60 * 60));
    }
    header("refresh:0");
    exit;
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <style>
        body {
            background-color: <?php echo ($modoActual === "1") ? 'black' : 'white'; ?>;
        }
    </style>
</head>
<body>
<form action="" method="post">
    <button name="btClaro"> Modo claro</button>
    <button name="btOscuro">Modo Oscuro</button>
</form>

</body>
</html>