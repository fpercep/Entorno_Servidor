<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <form action="resultado.php" method="post">
        <label for="datos_raw">Datos de entrada: </label>
        <br>
        <textarea name="datos_raw" cols="30" rows="10">

        </textarea>
        <br><br>
        <label for="min-valor">Valor Mínimo</label>
        <input type="number" name="min-valor" placeholder="0">
        <label for="max-valor">Valor Máximo</label>
        <input type="number" name="max-valor" placeholder="100">

        <div class="checkbox-group">
            <input type="checkbox" name="extras" value="gps">
            <label for="tecnologia">GPS</label>

            <input type="checkbox" name="extras" value="Sensor de carril">
            <label for="diseno">Diseño</label>

            <input type="checkbox" name="extras" value="Cámara 360">
            <label for="marketing">Marketing</label>

            <input type="checkbox" name="extras" value="ABS">
            <label for="marketing">Marketing</label>
        </div>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
