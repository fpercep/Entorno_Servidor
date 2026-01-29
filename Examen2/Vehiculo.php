<?php
class Vehiculo {
    protected $marca;
    protected $modelo;
    protected $matricula;

    public function __construct($marca, $modelo, $matricula) {
        $validar = "/[0-9]{4} [A-Z]{2}/";

        if(preg_match($validar, $matricula)){
            $this->matricula = $matricula;
        }else{
            $this->matricula = "0000 XXX";
        }
        $this->marca = $marca;
        $this->modelo = $modelo;

    }

    function __toString() {
        return $this->marca . "-" . $this->modelo . "-" . $this->matricula;
    }
}