<!DOCTYPE html>
<html>
<head>
    <title>Iniciar sesión</title>
    <!-- Estilos de Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/jpg" href="/assets/img/fav-ico.jpg"/>
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
                <h2>Iniciar sesión</h2>
                <form class="form-container" action="login.php" method="post">
                    <div class="form-group">
                        <input type="text" name="usuario" class="form-control" id="nombre" placeholder="Usuario" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="contrasena" class="form-control" id="password" placeholder="Contraseña" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                </form>
            </div>
        </div>
    </div>

    <?php
    // Iniciar sesión
    session_start();

    // Conexión a la base de datos
    $conexion = mysqli_connect("localhost", "root", "", "pull-libs");

    // Verificar conexión
    if (mysqli_connect_errno()) {
        echo "<div class='container mt-3'>";
        echo "<div class='alert alert-danger' role='alert'>";
        echo "Error al conectar a MySQL: " . mysqli_connect_error();
        echo "</div>";
        echo "</div>";
        exit();
    }

    // Recibir datos del formulario
    $nombre = $_POST['usuario'];
    $password = $_POST['contrasena'];

    // Buscar usuario en la base de datos
    $query = "SELECT * FROM user WHERE nombre='$nombre' AND password='$password'";
    $resultado = mysqli_query($conexion, $query);

    if ($fila = mysqli_fetch_assoc($resultado)) {
        // Verificar la contraseña
        if ($resultado->num_rows) {
            // Iniciar sesión y redirigir al usuario a una página de inicio
            $_SESSION['usuario'] = $nombre;
            header("Location: inicio.php");
        } else {
            echo "<div class='container mt-3'>";
            echo "<div class='alert alert-danger' role='alert'>";
            echo "Contraseña incorrecta. Intenta de nuevo.";
            echo "</div>";
            echo "</div>";
        }
    } else {
        echo "<div class='container mt-3'>";
        echo "<div class='alert alert-danger' role='alert'>";
        echo "Usuario no encontrado. Regístrate primero.";
        echo "</div>";
        echo "</div>";
    }

    // Cerrar conexión
    mysqli_close($conexion);
    ?>
</body>
</html>