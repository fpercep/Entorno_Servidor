<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <input name="nombre" type="text">
    <input name="img" type="file">
    <input name="enviar" type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["nombre"], $_FILES["img"])) {
        $name = $_FILES["img"]["name"];
        $temp = $_FILES["img"]["tmp_name"];

        if (!file_exists("./img")) {
            mkdir("./img");
        }
        $ruta = "./img/$name";
        move_uploaded_file($temp, "$ruta");

        echo "<img src='$ruta' alt='$name'>";
    }
}
?>
</body>
</html>
