<?php

class Evento {
    private $titulo;
    private $descripcion;
    private $fecha;
    private $hora;
    private $categoria;


    public function  __construct($titulo, $descripcion, $fecha, $hora, $categoria) {
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->fecha = $fecha;
        $this->hora = $hora;
        $this->categoria = $categoria;
    }

    public function getFechaCompleta() {

    }
}