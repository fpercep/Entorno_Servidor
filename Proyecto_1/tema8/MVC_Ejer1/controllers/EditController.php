<?php
namespace controllers;
use models\Director;
use models\Pelicula;
require_once __DIR__ . "/../models/Director.php";
require_once __DIR__ . "/../models/Pelicula.php";
class EditController
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
        $directores = $this->director->getAll();
        $pelicula = $this->pelicula->getOne($_GET["editar"]);
        $id_pelicula = $_GET["editar"];
        require_once __DIR__ . "/../views/edit.php";
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['titulo'], $_POST['director'])) {
            $this->pelicula->update($id_pelicula, $_POST['titulo'],$_POST['director']);
            header("Location:index.php");
            exit();
        }
    }
}
