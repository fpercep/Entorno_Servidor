<?php
session_start();

$usuarios = [
        "ana" => "1234",
        "juan" => "abcd",
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST["usuario"], $_POST["contrasena"])) {
        $usuario = $_POST["usuario"];
        $contrasena = $_POST["contrasena"];
        $login = false;

        if (isset($usuarios[$usuario]) && $usuarios[$usuario] === $contrasena) {
            $login = true;
        }

        if ($login) {
            $_SESSION['user'] = $usuario;
            $_SESSION['auth'] = true;
            header('Location: home.php');
            exit();
        } else {
            echo "Erro con usuario y/o contraseña";
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
    <input type="text" name="usuario">
    <input type="text" name="contrasena">
    <button type="submit">Enviar</button>
</form>

</body>
</html>