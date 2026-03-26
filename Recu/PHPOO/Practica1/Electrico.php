<?php

class Electrico extends Vehiculo implements Certificable
{

    public function obtenerEtiquieta(): string
    {
        return "Etiqueta 0 Emisiones - Exento de restricciones";
    }

    public function calcularAutonomia()
    {
        return 400;
    }
}