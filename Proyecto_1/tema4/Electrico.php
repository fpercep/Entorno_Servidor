<?php

class Electrico extends Vehiculo implements Certificable
{
    public function obtenerEtiqueta()
    {
        echo "Etiqueta 0 Emisiones - Exento de restricciones";
    }

    public function calcularAutonomia():int
    {
        return 400;
    }
}