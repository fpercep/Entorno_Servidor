<?php
abstract class Ruta {
    public $conductor;
    public $fecha;

    public $vehiculo;
    public $hora;
    public $duracion;
    public $distancia;
    public $cargas;
    public $zonas;
    static public $numero_rutas = 0;

    function __construct($conductor, $vehiculo, $fecha, $hora, $duracion, $distancia, $cargas, $zonas) {
        $validacion_nombre = "/^[a-z áéíóú]{3,}$/i";
        $validacion_fecha = "/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/i";
        $validacion_hora = "/^[0-2][0-9]:[0-6][0-9]$/i";

        if (preg_match($validacion_nombre, $conductor)) {
            $this->conductor = $conductor;
        } else {
            $this->conductor = "Conductor Generico";
        }

        if (preg_match($validacion_fecha, $fecha)) {
            $this->fecha = $fecha;
        } else {
            $this->fecha = date("d-m-Y");
        }

        if (preg_match($validacion_hora, $hora)) {
            $this->hora = $hora;
        }else {
            $this->hora = date("H:i");
        }

        $this->vehiculo =  $vehiculo;
        $this->duracion = $duracion;
        $this->distancia = $distancia;
        $this->cargas = $cargas;
        $this->zonas = $zonas;

        $this->conductor ++;
    }

    function __toString() {
        $fechaFormateada = str_replace("-", "/", $this->fecha);
        echo $this->conductor . " " . $fechaFormateada . " " . $this->hora .  "<br>";
    }

    function __get($atributo)
    {
        return $this->$atributo;
    }
    abstract public function tipoRuta();

}