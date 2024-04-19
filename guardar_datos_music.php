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
$autor = $_POST['autor'];
$titulo = $_POST['titulo'];
$genero = $_POST['genero'];
$social = $_POST['social'];
$favoritos = $_POST['favoritos'];
$url = $_POST['url'];

// Preparar la consulta SQL para insertar los datos en la tabla
$sql = "INSERT INTO music (autor, titulo, genero, social, favoritos, url) VALUES ('$autor', '$titulo', '$genero', '$social','$favoritos', '$url')";

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
