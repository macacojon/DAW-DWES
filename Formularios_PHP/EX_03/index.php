<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="numero">Introduce un número:</label>
    <input type="number" id="numero" name="numero">
    <input type="submit" value="Generar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];

    if (!empty($numero) && is_numeric($numero) && $numero > 0) {
        echo "<h2>Escribiendo $numero líneas:</h2>";
        for ($i = 1; $i <= $numero; $i++) {
            echo "<p>Línea $i</p>";
        }
    } else {
        echo "<p>Por favor, introduce un número válido mayor que cero.</p>";
    }
}
?>

</body>
</html>
