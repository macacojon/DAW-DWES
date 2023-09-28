<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required><br><br>

    <label for="apellidos">Apellidos:</label>
    <input type="text" id="apellidos" name="apellidos" required><br><br>

    <label for="contrasena">Contraseña:</label>
    <input type="password" id="contrasena" name="contrasena" required><br><br>

    <label>Alumno o Profesor:</label>
    <input type="checkbox" id="alumno_profesor" name="alumno_profesor" value="Alumno">
    <label for="alumno_profesor">Alumno</label>
    <input type="checkbox" id="alumno_profesor" name="alumno_profesor" value="Profesor">
    <label for="alumno_profesor">Profesor</label><br><br>

    <label for="foto">Foto (Nombre del fichero):</label>
    <input type="file" id="foto" name="foto" accept="image/*"><br><br>

    <label for="edad">Edad:</label>
    <input type="number" id="edad" name="edad" min="1" required><br><br>

    <label for="comentarios">Comentarios:</label><br>
    <textarea id="comentarios" name="comentarios" rows="4" cols="50"></textarea><br><br>

    <input type="hidden" name="test" value="myPrueba">

    <input type="submit" value="Enviar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h2>Resultados:</h2>";
    echo "Nombre: " . $_POST["nombre"] . "<br>";
    echo "Apellidos: " . $_POST["apellidos"] . "<br>";
    echo "Contraseña: " . $_POST["contrasena"] . "<br>";

    if (isset($_POST["alumno_profesor"])) {
        echo "Rol: " . $_POST["alumno_profesor"] . "<br>";
    }

    if ($_FILES["foto"]["error"] == UPLOAD_ERR_OK) {
        $nombre_foto = $_FILES["foto"]["name"];
        echo "Foto: $nombre_foto<br>";
    }

    echo "Edad: " . $_POST["edad"] . "<br>";
    echo "Comentarios: " . $_POST["comentarios"] . "<br>";
    echo "Campo oculto 'test': " . $_POST["test"] . "<br>";
}
?>
</body>
</html>
