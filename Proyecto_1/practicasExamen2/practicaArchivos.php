<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="mi_archivo">
    <input type="submit" value="Subir">
</form>
</body>
<?php
if(!empty($_FILES['mi_archivo']) ){
    $archivo = $_FILES['mi_archivo'];
    $archivo_tammio = $archivo["size"]/1024/1024;
    $archivo_extension = pathinfo($archivo['name'], PATHINFO_EXTENSION);
    $patronExtension = "/^(pdf|jpg|png|gif|txt)$/i";

    if($archivo_tammio <= 5 && preg_match($patronExtension, $archivo_extension)){
        if (!is_dir("files/")){
            mkdir("files/");
        }
        move_uploaded_file($archivo['tmp_name'], "files/".$archivo['name']);
        echo "El archivo se subio correctamente";
    }else{
        echo "ERROR al cargar el archivo: <br>";
        echo (!($archivo_tammio <= 5)) ? "-Archivo Desmasido Grande <br>" : "";
        echo (!preg_match($patronExtension, $archivo_extension)) ? "-Extensión no permitida" : "";
    }
}
?>
</html>