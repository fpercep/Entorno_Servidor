<?php

function validarUsuario($e, $p, $conexion)
{
    $sentecia = "SELECT id, nombre, rol FROM usuarios WHERE email = ? AND password = ?";
    if ($stmt = $conexion->prepare($sentecia)) {
        $stmt->bind_param("ss", $e, $p);
        $stmt->execute();
        $stmt->bind_result($id, $nombre, $rol);
        if ($stmt->fetch()) {
            return ["id" => $id, "nombre" => $nombre, "rol" => $rol];
        }
    }
    return false;
}

function obtnerIncidencias($id, $rol, $conexion){
    if ($rol = "admin") {

    } else {

    }
}

function crearIncidencia($resuelto, $titulo, $prioridad, $conexion)
{

}

function mostarCategorias($conexion) {
    $output= [];
    $sentecia = "SELECT id, nombre FROM categorias";
    if ($stmt = $conexion->prepare($sentecia)) {
        $stmt->execute();
        $stmt->bind_result($id, $nombre);
        while ($stmt->fetch()){
            $output [] = [$nombre => $id];
        }
    }
    return $output;
}
