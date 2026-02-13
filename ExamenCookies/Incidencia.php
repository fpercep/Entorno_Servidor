<?php

class Incidencia extends Ticket implements IInformable
{
    private $prioridad;
    private $resuelto;
    private $fecha;

    private $categoria;

    function __construct($e, $t, $p, $r, $f, $c)
    {
        $this->email = $e;
        $this->titulo = $t;
        $this->prioridad = $p;
        $this->resuelto = $r;
        $this->fecha = $f;
        $this->categoria = $c;
    }
    function getResumen()
    {
        return "$this->titulo [$this->prioridad] ";
    }

    function getEstilo()
    {
        if ($this->resuelto == 1){
            return "background-color: #d4edda; color: #155724";
        } else if ($this->prioridad === "alta") {
            return "background-color: #ffe6e6; color: #721c24; font-weight: bold";
        }
        return "";
    }
}