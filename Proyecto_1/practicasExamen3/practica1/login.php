<?php
require_once "funciones.php";
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST["usuario"]) && isset($_POST["password"])) {
        $usuario_input = $_POST["usuario"];
        $password_input = $_POST["password"];
        $conexion = mysqli_connect("localhost", "root", "", "practica1-agenda");
        $error = "";
        try {
            if ($id = iniciarSesion($usuario_input, $password_input, $conexion)) {
                $_SESSION['id'] = $id;
                $_SESSION['usuario'] = $usuario_input;
                header("location: index.php");
                exit();
            } else {
                throw new Exception("Error en el inicio de sesion");
            }
        } catch (Exception $e) {
            $error = $e->getMessage();
        }
        $conexion->close();
    }
}
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="usuario">Usuario: </label>
        <input type="text" name="usuario">
        <label for="password">Contraseña: </label>
        <input type="password" name="password">
        <button type="submit">Enviar</button>
    </form>
    <?php
    !empty($error) ? print $error : print "" ?>
</body>

</html>