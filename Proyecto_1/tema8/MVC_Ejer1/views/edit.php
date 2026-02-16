<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>

<body>
    <h1>Editar Pelicula</h1>
    <form action="" method="post" value="<?php echo $pelicula['id'] ?>">
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" value="<?php
        echo $pelicula['titulo'] ?>">
        <label for="director">Director</label>
        <select name="director">
            <?php
            foreach ($directores as $director): ?>
                <option value="<?php
                echo $director['id'] ?>" <?php echo ($pelicula['director'] == $director['nombre']) ? "selected" : "" ?>> <?php
                           echo $director['nombre'] ?> </option>
                <?php
            endforeach; ?>
        </select>
        <button type="submit">Editar</button>
        <a href="index.php"><button type="button">Cancelar</button></a>
    </form>
</body>

</html>