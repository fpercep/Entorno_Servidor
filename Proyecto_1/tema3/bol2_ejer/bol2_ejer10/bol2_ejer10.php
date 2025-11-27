<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <input name="archivo" type="file">
    <input name="enviar" type="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES['archivo']) && $_FILES['archivo']['error'] == 0) {
        $extesionesPermitidas = ["jpg", "pdf", "png", "gif", "txt"];
        $archivo = $_FILES['archivo'];
        $archivo_temp = $archivo['tmp_name'];
        $nombre = $archivo['name'];
        $tamanio = ($archivo['size']) / (1024 * 1024);
        $extension = pathinfo($nombre, PATHINFO_EXTENSION);
        if (in_array($extension, $extesionesPermitidas)) {
            if ($tamanio <= 5) {
                if (!file_exists("./files")) {
                    mkdir("./files");
                }
                $ruta = "./files/$nombre";
                move_uploaded_file($archivo_temp, $ruta);
                echo "El archivo $nombre se subio correctamente";
            } else {
                echo "El tamaño supera 4MB";
            }
        } else {
            echo "El formato de archivo no es permitido";
        }
    }
}

?>
</body>
</html>