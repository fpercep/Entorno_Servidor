<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <input name="archivos[]" type="file" multiple>
    <input name="enviar" type="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<table>";
    echo "<tr>";
    echo "<th>Nombre Archivo</th>";
    echo "<th>Nuevo Nombre</th>";
    echo "<th>Extension</th>";
    echo "<th>Tamaño</th>";
    echo "</tr>";
    if (isset($_FILES['archivos'])) {
        $archivos = $_FILES['archivos'];
        $n_Archivos = count($archivos['name']);
        for ($i = 0; $i < $n_Archivos; $i++) {
            $archivo = $archivos['name'][$i];
            $archivo_temp = $archivos['tmp_name'][$i];
            $archivo_nombre = pathinfo($archivo, PATHINFO_FILENAME);
            $archivo_size = $archivos['size'][$i];
            $archivo_nNombre = uniqid();
            $archivo_extension = pathinfo($archivo, PATHINFO_EXTENSION);
            echo "<tr>";
            echo "<td>" . $archivo_nombre . "</td>";
            echo "<td>" . $archivo_nNombre . "</td>";
            echo "<td>" . $archivo_extension . "</td>";
            echo "<td>" . $archivo_size . " Bytes</td>";
            echo "</tr>";
            if (!file_exists("./img")) {
                mkdir("./img");
            }
            $ruta = "./img/$archivo_nNombre.$archivo_extension";
            move_uploaded_file($archivo_temp, $ruta);
        }
    }
    echo "</table>";
}
?>
</body>
</html>