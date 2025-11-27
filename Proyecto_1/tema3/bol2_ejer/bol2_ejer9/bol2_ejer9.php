<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            border: 1px solid #000;
        }

        table td,
        table th,
        table tr {
            padding: 8px;
            border: 1px solid #000;
            text-align: center;
        }

        table tr {
            border: 1px solid black;
        }

        table td {
            background-color: #f8e8dd;
            color: #000000;
        }

        table th {
            background-color: #c6956f;
            color: white;
        }
    </style>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <input name="archivos[]" type="file" multiple>
    <input name="enviar" type="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES['archivos'])) {
        echo "<br><table>";
        echo "<tr>";
        echo "<th>Nombre Archivo</th>";
        echo "<th>Nuevo Nombre</th>";
        echo "<th>Extension</th>";
        echo "<th>Tamaño</th>";
        echo "</tr>";
        $archivos = $_FILES['archivos'];
        $n_Archivos = count($archivos['name']);
        for ($i = 0; $i < $n_Archivos; $i++) {
            $archivo = $archivos['name'][$i];
            $archivo_temp = $archivos['tmp_name'][$i];
            $archivo_nombre = pathinfo($archivo, PATHINFO_FILENAME);
            $archivo_size = ($archivos['size'][$i]) / (1024 * 1024);
            $archivo_nNombre = uniqid();
            $archivo_extension = pathinfo($archivo, PATHINFO_EXTENSION);
            $extesionesPermitidas = ["jpg", "jpeg", "png", "gif", "txt"];
            echo "<tr>";
            if (in_array($archivo_extension, $extesionesPermitidas)) {
                echo "<td>" . $archivo_nombre . "</td>";
                echo "<td>" . $archivo_nNombre . "</td>";
                echo "<td>" . $archivo_extension . "</td>";
                echo "<td>" . $archivo_size . " MB</td>";
                if (!file_exists("./img")) {
                    mkdir("./img");
                }
                $ruta = "./img/$archivo_nNombre.$archivo_extension";
                move_uploaded_file($archivo_temp, $ruta);
            } else {
                echo "<td colspan='4'>" . $archivo . " no es uno archivo permido (.jpg, .jpeg, .png, .gif o .txt)</td>";
            }
            echo "</tr>";
        }
    }
    echo "</table>";
}
?>
</body>
</html>