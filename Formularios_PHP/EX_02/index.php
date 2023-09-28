<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="operacion">Introduce una operación:</label>
    <input type="text" id="operacion" name="operacion">
    <input type="submit" value="Calcular">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $operacion = $_POST["operacion"];
    $resultado = "";

    if (!empty($operacion)) {
        eval("\$resultado = $operacion;");
        echo "<p>Operación: $operacion</p>";
        echo "<p>Resultado: $resultado</p>";
    } else {
        echo "<p>No se ha introducido ninguna operación.</p>";
    }
}
?>

</body>
</html>
