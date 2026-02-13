<?php
require_once "funciones.php";
require_once "Evento.php";
session_start();
$eventos = [];
if (isset($_SESSION["id"], $_SESSION["usuario"])) {
    $conexion = mysqli_connect("localhost", "root", "", "practica1-agenda");
    if (comprobarSesion($_SESSION["id"], $_SESSION["usuario"], $conexion)) {
        eventosRecientes($_SESSION["id"], $_SESSION["usuario"], $conexion);
        $eventos = obtenerEventos($_SESSION["id"], $_SESSION["usuario"], $conexion);
    } else {
        header("location: login.php");
    }
    $conexion->close();
} else {
    header("location: login.php");
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        td,
        th {
            padding: 10px;
        }
    </style>
</head>

<body>
    <h1>Gestionar Eventos</h1>
    <p><?php echo (isset($_COOKIE["recordatorios"]) && $_COOKIE["recordatorios"] = 1) ? "Tienes eventos próximos en las próximas 24 horas" : "No tienes eventos próximos en las próximas 24 horas"?></p>
    <button><a>Crear Evento</a></button><br><br>
    <table>
        <tr>
            <th>Titulo</th>
            <th>Descripcion</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Categoria</th>
            <th colspan="2">Aciones</th>
        </tr>

        <?php
        if (!empty($eventos)) {
            foreach ($eventos as $evento) {
                echo "<tr>";
                echo "<td>" . $evento->getTitulo() . "</td>";
                echo "<td>" . $evento->getDescripcion() . "</td>";
                echo "<td>" . $evento->getFecha() . "</td>";
                echo "<td>" . $evento->getHora() . "</td>";
                echo "<td>" . $evento->getCategoria() . "</td>";
                echo "<td><a href='eliminarEvento.php?id=" . $evento->getId() . "'>Eliminar</a></td>";
                echo "<td><a href='editarEvento.php?id=" . $evento->getId() . "'>Editar</a></td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
</body>

</html>