<?php

namespace models;

class Director
{
    private $conexion;

    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    public function getAll()
    {
        $resultado = $this->conexion->query("SELECT * FROM directores");
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }
}