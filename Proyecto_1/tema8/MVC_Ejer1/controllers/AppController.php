<?php
namespace controllers;
use models\Director;
use models\Pelicula;
require_once __DIR__ . "/../models/Director.php";
require_once __DIR__ . "/../models/Pelicula.php";

class AppController
{
    private $pelicula;
    private $director;
    public function __construct($conexion)
    {
        $this->pelicula = new Pelicula($conexion);
        $this->director = new Director($conexion);
    }

    public function index()
    {
        if (isset($_GET['borrar'])) {
            $this->pelicula->delete($_GET['borrar']);
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty(trim($_POST['titulo'])) &&  !empty($_POST['director'])) {
            $this->pelicula->create($_POST['titulo'], $_POST['director']);
        }

        $filtro = $_GET['filtro_director'] ?? 0;
        $peliculas = ($filtro != 0) ? $this->pelicula->getAll($filtro) : $this->pelicula->getAll();

        $directores = $this->director->getAll();
        require_once __DIR__ . "/../views/app.php";
    }
}