<?php

class Evento
{
    private $id;
    private $titulo;
    private $descripcion;
    private $fecha;
    private $hora;
    private $categoria;

    public function __construct($id, $titulo, $descripcion, $fecha, $hora, $categoria)
    {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->fecha = $fecha;
        $this->hora = $hora;
        $this->categoria = $categoria;
    }

    public function esProximo()
    {
        try {
            $now = new DateTime('now');
            $time = new DateTime($this->fecha . ' ' . $this->hora);
            if ($now > $time) {
                return false;
            } else {
                return (($time->diff($now))->days) < 1;
            }
        } catch (Exception $e) {
            return null;
        }
    }

    public function getFechaCompleta()
    {
        try {
            return new DateTime($this->fecha);
        } catch (Exception $e) {
            return null;
        }
    }

    public function getTitulo()
    {
        return $this->titulo;
    }
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function getFecha()
    {
        return $this->fecha;
    }
    public function getHora()
    {
        return $this->hora;
    }
    public function getCategoria()
    {
        return $this->categoria;
    }
    public function getId()
    {
        return $this->id;
    }
}