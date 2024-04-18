<!DOCTYPE html>
<html>
<head>
    <title>Registro e inicio de sesión</title>
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
</body>
</html>

