<?php

namespace models;

class Pelicula
{
    private $conexion;

    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    public function getAll()
    {
        $sentencia = "SELECT p.id , p.titulo, d.nombre AS director
                    FROM peliculas AS p 
                    LEFT JOIN directores d
                    ON p.director_id = d.id";

        $resultado = $this->conexion->query($sentencia);
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    public function create($id, $titulo)
    {
        $sentencia = "INSERT INTO peliculas(titulo, director_id) VALUES(?, ?)";
        if ($consulta = $this->conexion->prepare($sentencia)) {
            $consulta->bind_param("si", $titulo, $id);
            return $consulta->execute();
        }
        return  false;
    }

    public function update($id, $titulo, $director_id)
    {
        $sentencia = "UPDATE peliculas SET titulo = ?, director_id = ? WHERE id = ?";
        if ($consulta = $this->conexion->prepare($sentencia)) {
            $consulta->bind_param("sii", $titulo, $director_id, $id);
            return $consulta->execute();
        }
        return false;
    }

    public function delete($id)
    {
        $sentencia = "DELETE FROM peliculas WHERE id = ?";
        if ($consulta = $this->conexion->prepare($sentencia)) {
            $consulta->bind_param("i", $id);
            return $consulta->execute();
        }
        return false;
    }
}