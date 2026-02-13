<?php
use controllers\Controller;
use config\Database;
require_once "config/Database.php";
require_once "controllers/Controller.php";

$conexion = Database::conectar();
$controller = new Controller($conexion);
$controller->index();