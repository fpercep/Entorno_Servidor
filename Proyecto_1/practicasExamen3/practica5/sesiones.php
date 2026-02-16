<?php
function verificarCredenciales($email, $password, $conexion)
{
    $sentencia = "SELECT id, nombre, rol FROM usuarios WHERE email = ? AND password = ?";
    if ($consulta = $conexion->prepare($sentencia)) {
        $consulta->bind_param("ss", $email, $password);
        $consulta->execute();
        $consulta->bind_result($id, $nombre, $rol);
        if ($consulta->fetch()) {
            return ["id" => $id, "nombre" => $nombre, "rol" => $rol];
        }
    }
    return false;
}

function sesionIniciada()
{
    if (isset($_SESSION["id"], $_SESSION["nombre"], $_SESSION["rol"])) {
        return true;
    } else {
        return false;
    }
}