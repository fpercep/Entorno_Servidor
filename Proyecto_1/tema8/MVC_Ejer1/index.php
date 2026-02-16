<?php
use controllers\AppController;
use controllers\EditController;
use config\Database;

require_once __DIR__ . "/config/Database.php";
require_once __DIR__ . "/controllers/AppController.php";
require_once __DIR__ . "/controllers/EditController.php";

$conexion = Database::conectar();

if (isset($_GET["editar"])) {
    $controller = new EditController($conexion);
} else {
    $controller = new AppController($conexion);
}

$controller->index();