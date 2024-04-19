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
$facebook = $_POST['facebook'];
$instagram = $_POST['instagram'];
$youtube = $_POST['youtube'];
$tiktok = $_POST['tiktok'];
$telegram = $_POST['telegram'];
$favs = $_POST['favoritos'];

// Preparar la consulta SQL para insertar los datos en la tabla
$sql = "INSERT INTO social (facebook, instagram, youtube, tiktok, telegram, favs) VALUES ('$facebook', '$instagram', '$youtube', '$tiktok', '$telegram','$favs')";

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
