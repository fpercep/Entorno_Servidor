<?php

class Hidrogeno extends Vehiculo implements Certificable
{

    public function obtenerEtiquieta(): string
    {
        return "Etiqueta ECO - Acceso permitido a centro ciudad";
    }

    public function calcularAutonomia()
    {
        return 650;
    }
}