<?php

namespace models;

class Tarea
{

    private $conexion;

    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    public function getAll()
    {
        $sentencia = "SELECT t.* , c.nombre as categoria FROM tareas t LEFT JOIN categorias c ON t.categoria_id = c.id";
        $resultado = $this->conexion->query($sentencia);
        if ($resultado) {
            return $resultado->fetch_all(MYSQLI_ASSOC);
        }
        return [];
    }

    public function getOne($id)
    {
        $sentencia = "SELECT t.* , c.nombre as categoria FROM tareas t LEFT JOIN categorias c ON t.categoria_id = c.id WHERE t.id = ?";
        if ($consulta = $this->conexion->prepare($sentencia)) {
            $consulta->bind_param("i", $id);
            $consulta->execute();
            return $consulta->get_result()->fetch_assoc();
        }
        return false;
    }

    public function delete($id): bool
    {
        $sentencia = "DELETE FROM tareas WHERE id = ?";
        if ($consulta = $this->conexion->prepare($sentencia)) {
            $consulta->bind_param("i", $id);
            if ($consulta->execute()){
                return true;
            }
        }
        return false;
    }

    public function create($titulo, $completada,$categoria_id ) :bool
    {
        $sentencia = "INSERT INTO tareas (titulo, completada, categoria_id)(?,?,?,?)";
        if ($consulta = $this->conexion->prepare($sentencia)) {
            $consulta->bind_param("ssi", $titulo,$completada,$categoria_id);
            if ($consulta->execute()){
                return true;
            }
        }
        return false;
    }

    public function update($id, $titulo, $completada, $categoria_id) :bool
    {
        $sentencia = "UPDATE tareas SET titulo = ?, completada = ?,  categoria_id, WHERE id = ?";
        if ($consulta = $this->conexion->prepare($sentencia)) {
            $consulta->bind_param($titulo,$completada,$categoria_id,$id);
            if ($consulta->execute()){
                return true;
            }
        }
        return false;
    }

}