<!DOCTYPE html>
<html>
<head>
    <title>Registro e inicio de sesión</title>
    <!-- Estilos de Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="/assets/img/icono.ico" type="image/x-icon">
    <style>
        /* Estilo adicional para los formularios */
        .form-container {
            margin-top: 20px;
            max-width: 400px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Registro</h2>
                <form class="form-container" action="registro.php" method="post">
                    <div class="form-group">
                        <input type="text" name="usuario" class="form-control" id="nombre" placeholder="Usuario" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" id="mail" placeholder="Correo electrónico" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="contrasena" class="form-control" id="password" placeholder="Contraseña" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Registrarse</button>
                </form>
            </div>
        </div>
    </div>

    <?php
    // Conexión a la base de datos
    $conexion = mysqli_connect("localhost", "root", "", "pull-libs");

    // Verificar conexión
    if (mysqli_connect_errno()) {
        echo "Error al conectar a MySQL: " . mysqli_connect_error();
        exit();
    }

    // Recibir datos del formulario
    $nombre = $_POST['usuario'];
    $mail = $_POST['email'];
    $password = $_POST['contrasena'];

    // Encriptar la contraseña (opcional)
    //$contrasena_encriptada = password_hash($password, PASSWORD_DEFAULT);

    // Insertar datos en la base de datos
    $query = "INSERT INTO user (nombre, mail, pasword) VALUES ('$nombre', '$mail', '$password')";
    $resultado = mysqli_query($conexion, $query);

    if ($resultado) {
        echo "<div class='container mt-3'>";
        echo "<div class='alert alert-success' role='alert'>";
        echo "Registro exitoso. Ahora puedes iniciar sesión.";
        echo "</div>";
        echo "</div>";
    } else {
        echo "<div class='container mt-3'>";
        echo "<div class='alert alert-danger' role='alert'>";
        echo "Error al registrar el usuario: " . mysqli_error($conexion);
        echo "</div>";
        echo "</div>";
    }

    // Cerrar conexión
    mysqli_close($conexion);
    ?>
</body>
</html>
