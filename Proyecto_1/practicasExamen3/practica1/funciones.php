<?php
function crearEvento($titulo, $descripcion, $fecha, $hora, $categoria, $usuario_id, $conexion)
{
    $sentencia = "INSERT INTO eventos (titulo, descripcion, fecha, hora, categoria, usuario_id) VALUES (?, ?, ?, ?, ?, ?)";
    if ($consulta = $conexion->prepare($sentencia)) {
        $consulta->bind_param("sssssi", $titulo, $descripcion, $fecha, $hora, $categoria, $usuario_id);
        $resultado = $consulta->execute();
        $consulta->close();
        return $resultado;
    }
    return false;
}

function eliminarEvento($idEvento, $usuario_id, $conexion)
{
    $sentencia = "DELETE FROM eventos WHERE id = ? AND usuario_id = ?";
    if ($consulta = $conexion->prepare($sentencia)) {
        $consulta->bind_param("ii", $idEvento, $usuario_id);
        $resultado = $consulta->execute();
        $consulta->close();
        return $resultado;
    }
    return false;
}

function comprobarSesion($id, $usuario, $conexion)
{
    $sentencia = "SELECT id  FROM usuarios WHERE usuario = ? AND id = ?";
    if ($consulta = $conexion->prepare($sentencia)) {
        $consulta->bind_param("si", $usuario, $id);
        $consulta->execute();
        $consulta->store_result();
        $existe = $consulta->num_rows === 1;
        $consulta->close();
        return $existe;
    }
    return false;
}

function iniciarSesion($usuario, $password, $conexion)
{
    $sentencia = "SELECT id, password FROM usuarios WHERE usuario = ?";
    if ($consulta = $conexion->prepare($sentencia)) {
        $consulta->bind_param("s", $usuario);
        $consulta->execute();
        $consulta->bind_result($id_db, $password_db);
        if ($consulta->fetch()) {
            if ($password === $password_db) {
                return $id_db;
            }
        }
    }
    return false;
}

function obtenerEventos($id, $usuario, $conexion)
{
    $eventos = [];
    $sentencia = "SELECT id, titulo, descripcion, fecha, hora, categoria FROM eventos WHERE usuario_id = ? ORDER BY fecha ASC, hora ASC";
    $consulta = $conexion->prepare($sentencia);
    $consulta->bind_param("i", $id);
    $consulta->execute();
    $consulta->bind_result($id_evento, $titulo, $descripcion, $fecha, $hora, $categoria);
    while ($consulta->fetch()) {
        $eventos[] = new Evento($id_evento, $titulo, $descripcion, $fecha, $hora, $categoria);
    }
    $consulta->close();
    return $eventos;
}
function obtenerEvento($id_evento, $is_usario, $conexion)
{
    $sentencia = "SELECT id, titulo, descripcion, fecha, hora, categoria FROM eventos WHERE usuario_id = ? And id = ?";
    $consulta = $conexion->prepare($sentencia);
    $consulta->bind_param("ii", $id_evento, $is_usario);
    $consulta->execute();
    $consulta->bind_result($id, $titulo, $descripcion, $fecha, $hora, $categoria);
    if ($consulta->fetch()){
        $evento = new Evento($id_evento, $titulo, $descripcion, $fecha, $hora, $categoria);
        $consulta->close();
        return $evento;
    }
    return false;
}


function eventosRecientes($id, $usuario, $conexion)
{
    $eventos = obtenerEventos($id, $usuario, $conexion);
    $hayProximos = false;
    foreach ($eventos as $evento) {
        if ($evento->esProximo()) {
            $hayProximos = true;
        }
    }
    if ($hayProximos) {
        setcookie("recordatorios", 1, time() + (2 * 60 * 60));
    } else {
        setcookie("recordatorios", "", time() - 3600);
    }
}