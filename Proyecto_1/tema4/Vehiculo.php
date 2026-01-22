<?php
abstract class Vehiculo
{
    private $id;
    protected $nombre;
    protected $fechaAdquisicion;
    protected $kilometraje;
    protected $extras;

    public static $contador = 0;

    public static function formatearCodigo($codigo) : string{
        return str_replace(" ","",strtoupper($codigo));
    }

    public function __construct($i,$n,$f,$k,$e=[]){
        $regexID = "/^[A-Za-z]{3}-[0-9]{4}[A-Za-z]$/";
        $regexFecha = "/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/";

        if (preg_match($regexID, self::formatearCodigo($i)) && preg_match($regexFecha, $f)) {
            $this->id = self::formatearCodigo($i);
            $this->nombre = $n;
            $this->kilometraje = $k;
            $this->fechaAdquisicion = $f;
            $this->extras = $e;
            self::$contador ++;
        }
        else {
            if (!preg_match($regexFecha, $f)) {
                echo "La fecha debe tener el formato AAAA-MM-DD";
            }
            if (!preg_match($regexID, $i)) {
                echo "EL codigo debe tener el formato XXX0000X";
            }
        }
    }

    public function calcularSalud(){
        $salud = 100;
        if ($this->kilometraje > 20000) {
            $salud -= 25;
        }
        if ($this->calcularEdad() > 5) {
            $salud -= 25;
        }
        return $salud;
    }

    private function calcularEdad() : int{
        $fecha = new DateTime();
        $fecha_nac = new DateTime("$this->fechaAdquisicion");
        $interval = $fecha_nac->diff($fecha);
        return $interval->y;
    }

    abstract public function calcularAutonomia();

    public function __toString(){
        return $this->nombre . " - " . $this->id . " - " . $this->fechaAdquisicion . " - " . $this->kilometraje . "Km";
    }
}