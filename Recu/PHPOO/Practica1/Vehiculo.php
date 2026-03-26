<?php

abstract class Vehiculo
{
    private $id;
    protected $marca;
    protected $nombre;
    protected $fechaAdquisicion;
    protected $kilometraje;
    protected $extras;

    static $contador = 0;

    static function formatearCodigo($cadena ){
        return strtoupper(trim($cadena));
    }

    public function __construct($id, $nombre, $marca, $fechaAdquisicion, $kilometraje, $extras)
    {
        $regExID = "/^[a-z]{3}-[0-9]{4}[a-z]$/i";
        $regExFecha = "/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/";

        if(preg_match($regExID, self::formatearCodigo($id)) && preg_match($regExFecha, $fechaAdquisicion)){
            $this->id = $id;
            $this->nombre = $nombre;
            $this->marca = $marca;
            $this->fechaAdquisicion = $fechaAdquisicion;
            $this->kilometraje = $kilometraje;
            $this->extras = $extras;
        }
    }

    public function calcularSalud() {
        $adquisicion = new DateTime($this->fechaAdquisicion);
        $hoy = new DateTime();
        $salud = 100;

        if($adquisicion->diff($hoy)->y > 5){
            $salud -= 25;
        }
        if ($this->kilometraje > 20.000) {
            $salud -= 25;
        }
    }

    abstract public function calcularAutonomia();

    public function __toString()
    {
        $fechaFormateada = (new DateTime($this->fechaAdquisicion))->format('d/m/Y');
        $extras = implode(", ", $this->extras);
        return "ID: {$this->id} | Adquirido: {$fechaFormateada} Extras: {$extras}";
    }

}