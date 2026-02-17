<?php

namespace models;

class Categoria
{
    private $conexion;

    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    public function getAll()
    {
        $sentencia = "SELECT * FROM categorias";
        $resultado = $this->conexion->query($sentencia);
        if ($resultado) {
            return $resultado->fetch_all(MYSQLI_ASSOC);
        }
        return [];
    }
}