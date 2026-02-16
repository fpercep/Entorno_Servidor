<?php

include 'sesiones.php';
$conexion = new mysqli("localhost", "root", "", "practica_tienda");
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email']) && isset($_POST['password'])) {
    if ($credenciales = verificarCredenciales($_POST['email'], $_POST['password'], $conexion)) {
        $_SESSION['id'] = $credenciales['id'];
        $_SESSION['nombre'] = $credenciales['nombre'];
        $_SESSION['rol'] = $credenciales['rol'];

        switch ($credenciales['rol']) {
            case "empresario":
                header("location:./paneles/indexEmpresario.php");
                break;
            case "empleado":
                header("location:./paneles/indexEmpleado.php");
                break;
            default:
                header("location:./paneles/indexCliente.php");
                break;
        }
        exit();
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
        <label for="email">Email</label>
        <input type="text" name="email"> <br>
        <label for="password">Password</label>
        <input type="password" name="password"><br>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>