<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<h1>Lista de Peliculas</h1>
<table>
    <tr>
        <th>Titulo</th>
        <th>Director</th>
    </tr>
    <?php foreach ($peliculas as $pelicula): ?>
        <tr>
            <td><?= $pelicula['titulo'] ?></td>

            <td><?= $pelicula['director'] ?? 'Sin Director' ?></td>

            <td>
                <a href="index.php?action=editar&id=<?= $pelicula['id'] ?>">Editar</a>

                <a href="index.php?action=borrar&id=<?= $pelicula['id'] ?>"
                   onclick="return confirm('¿Estás seguro?')">Borrar</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>