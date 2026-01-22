<?php

class Hidrogeno extends Vehiculo implements Certificable
{
    public function obtenerEtiqueta()
    {
        echo "Etiqueta ECO - Acceso permitido a centro ciudad";
    }

    public function calcularAutonomia():int
    {
        return 650;
    }
}