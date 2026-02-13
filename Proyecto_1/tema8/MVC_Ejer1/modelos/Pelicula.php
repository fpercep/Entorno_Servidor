<?php

namespace modelos;

class Pelicula
{
    private $conexion;

    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    public function obtenerTodos()
    {
        $sentencia = "SELECT p.id , p.titulo, d.nombre AS director
                    FROM peliculas AS p 
                    LEFT JOIN directores d
                    ON p.director_id = d.id";

        $resultado = $this->conexion->query($sentencia);
        return $resultado->fetch_all();
    }
}