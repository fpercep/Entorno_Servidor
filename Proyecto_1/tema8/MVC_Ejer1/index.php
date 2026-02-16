<?php
use controllers\Controller;
use config\Database;
require_once __DIR__ . "/config/Database.php";
require_once __DIR__ . "/controllers/Controller.php";

$conexion = Database::conectar();
$controller = new Controller($conexion);
$controller->index();