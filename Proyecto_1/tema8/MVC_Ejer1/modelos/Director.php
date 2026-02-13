<?php

namespace modelos;

class Director
{
    private $conexion;

    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    public function obtenerTodos()
    {
        $resultado = $this->conexion->query("SELECT * FROM directores");
        return $resultado->fetch_all();
    }

    public static function crearPelicula($id, $titulo)
    {
        $sentencia = "INSERT INTO peliculas(titulo, director_id) VALUES(?, ?)";

    }
}