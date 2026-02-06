<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST["usuario"]) && isset($_POST["password"])) {

        $usuario_input = $_POST["usuario"];
        $password_input = $_POST["password"];

        $conexion = mysqli_connect("localhost", "root", "", "practica1-agenda");
        $sentencia = "SELECT id, password FROM usuarios WHERE usuario = ?";
        $error = "";
        if ($consulta = $conexion->prepare($sentencia)) {
            $consulta->bind_param("s", $usuario_input);
            $consulta->execute();
            $consulta->bind_result($id_db, $password_db);
            try {
                if ($consulta->fetch()) {
                    if ($password_input === $password_db) {
                        session_start();
                        $_SESSION["id"] = $id_db;
                        $_SESSION["usuario"] = $usuario_input;
                        header('Location: index.php');
                        exit();
                    }
                } else {
                    throw new Exception("Error en la consulta");
                }
            } catch (Exception $e) {
                $error = $e->getMessage();
            }
        }
        $consulta->close();
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
        <label for="usuario">Contraseña: </label>
        <input type="text" name="password">
        <button type="submit">Enviar</button>
    </form>
    <?php !empty($error) ? print $error : print "" ?>
</body>

</html>