<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <style>
        td, th {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<form action="" method="post">
    <label for="texto">Introduce un texto:</label>
    <input type="text" name="texto">
    <input type="submit" value="submit">
</form>

<table>
    <tr>
        <th>Palabra</th>
        <th>Numero</th>
        <th>MAYUSCULA</th>
        <th>RE</th>
        <th>FECHA</th>
        <th>FINAL CONSONANTE</th>
        <th>FINAL VOCAL</th>
    </tr>
<?php
if(isset($_POST['texto'])){
    $texto = $_POST['texto'];
    $palabras = explode(" ", trim($texto));
    $contieneNumero = "/[0-9]/";
    $empizaMayus = "/^[A-ZÑ]/";
    $contieneRe = "/.+re.+/";
    $contieneFecha = "/[0-9]{4}/";
    $terminaConsonante = "/[b-df-hj-np-tv-z]$/i";
    $terminarVocal = "/[a-z]$/i";

    foreach($palabras as $palabra){
        echo "<tr>";
        echo "<td>".$palabra."</td>";
        echo "<td>".(preg_match($contieneNumero, $palabra) ? "SI" : "NO")."</td>";
        echo "<td>".(preg_match($empizaMayus, $palabra) ? "SI" : "NO")."</td>";
        echo "<td>".(preg_match($contieneRe, $palabra) ? "SI" : "NO")."</td>";
        echo "<td>".(preg_match($contieneFecha, $palabra) ? "SI" : "NO")."</td>";
        echo "<td>".(preg_match($terminaConsonante, $palabra) ? "SI" : "NO")."</td>";
        echo "<td>".(preg_match($terminarVocal, $palabra) ? "SI" : "NO")."</td>";
    }
}
?>
</table>
</body>
</html>
