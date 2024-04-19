<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "pull-libs";

$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$url = $_POST['url'];
$nombre = $_POST['nombre'];
$contenido = $_POST['contenido'];
$favs = $_POST['favoritos'];

// Preparar la consulta SQL para insertar los datos en la tabla
$sql = "INSERT INTO webby (url, nombre, contenido, favs) VALUES ('$url', '$nombre', '$contenido', '$favs')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    // Redirigir a inicio.php
    header("Location: inicio.php");
    echo "Datos guardados correctamente.";
} else {
    echo "Error al guardar los datos: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
