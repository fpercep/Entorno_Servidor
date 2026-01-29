<?php

class RutaUrbana extends Ruta implements Analizable
{
    public $pasaCentro = false;

    public function calcularEficiencia()
    {
        $eficiencia = ($this->distancia * $this->duracion) * 10;

        foreach ($this->zonas as $zona) {
            if (trim(strtolower($zona)) == "centro"){
                $eficiencia -= $eficiencia * (0.10);
                $this->pasaCentro = true;
            }
        }
        return $eficiencia;

    }

    public function nivelImpacto()
    {
        $impacto = 2;
        if ($this->distancia <= 15) {
            $impacto += 2;

            if ($this->cargas > 70) {
                $impacto += 2;
            }
        }
        return $impacto;
    }

    public function tipoRuta () {
        return "Urbana";
    }
}