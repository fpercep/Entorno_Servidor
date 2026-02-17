<?php

namespace controllers;
use models\Categoria;
use models\Director;
use models\Pelicula;
use models\Tarea;

require_once __DIR__ . "/../models/Categoria.php";
require_once __DIR__ . "/../models/Tarea.php";

class AppController {

    private $categoria;
    private $tarea;

    public function __construct($conexion) {
        $this->categoria = new Categoria($conexion);
        $this->tarea = new Tarea($conexion);
    }

    public function index()
    {
        $categorias = $this->categoria->getAll();
        $peliculas = $this->categoria->getAll();
    }

}