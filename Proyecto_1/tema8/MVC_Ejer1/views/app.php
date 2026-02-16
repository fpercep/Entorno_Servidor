<!doctype html>
<html lang="es">

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

        th,
        td {
            padding: 8px;
        }
    </style>
</head>

<body>
<h1>Añadir Pelicula</h1>
<form action="" method="post">
    <label for="titulo">Titulo</label>
    <input type="text" name="titulo">
    <label for="titulo">Director</label>
    <select name="director">
        <option value=""></option>
        <?php
        foreach ($directores as $director): ?>
            <option value="<?php
            echo $director['id'] ?>"> <?php
                echo $director['nombre'] ?> </option>
        <?php
        endforeach; ?>
    </select>
    <button type="submit">Crear</button>
</form>
<br>
<hr>
<h1>Lista de Peliculas</h1>
<form action="">
    <label for="titulo">Director: </label>
    <select name="filtro_director" onchange="this.form.submit()">
        <option value="0">Todos lo directores</option>
        <?php
        foreach ($directores as $director): ?>
            <option value="<?php echo $director['id'] ?>"
            <?php echo isset($_GET['filtro_director']) && $_GET['filtro_director'] == $director['id'] ? 'selected' : ''; ?>>
            <?php echo $director['nombre'] ?>
            </option>
        <?php
        endforeach; ?>
    </select>
</form>
<br>
<table>
    <tr>
        <th>Titulo</th>
        <th>Director</th>
        <th>Acciones</th>
    </tr>
    <?php
    foreach ($peliculas as $pelicula): ?>
        <tr>
            <td><?= $pelicula['titulo'] ?></td>
            <td><?= $pelicula['director'] ?? 'Sin Director' ?></td>
            <td>
                <a href="?editar=<?= $pelicula['id'] ?>">Editar</a>
                <a href="?borrar=<?= $pelicula['id'] ?>">Borrar</a>
            </td>
        </tr>
    <?php
    endforeach; ?>
</table>
</body>

</html>