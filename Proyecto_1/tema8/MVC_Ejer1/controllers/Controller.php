<?php
namespace controllers;
use models\Director;
use models\Pelicula;
require_once "../models/Director.php";
require_once "../models/Pelicula.php";

class Controller {
    private $pelicula;
    private $director;
    public function __construct($conexion)
    {
        $this->pelicula = new Pelicula($conexion);
        $this->director = new Director($conexion);
    }

    public function index()
    {
        $peliculas = $this->pelicula->getAll();
        require_once "../views/app.php";
    }
}