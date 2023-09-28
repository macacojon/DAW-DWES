<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="texto">Introduce una palabra:</label>
    <input type="text" id="texto" name="texto">
    <input type="submit" value="Enviar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["texto"])) {
        $texto = $_POST["texto"];
        $longitud = strlen($texto);
        echo "La longitud de la palabra introducida es: $longitud";
    } else {
        echo "No se ha introducido ninguna palabra.";
    }
}
?>

</body>
</html>
