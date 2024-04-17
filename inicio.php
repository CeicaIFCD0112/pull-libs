<!DOCTYPE html>
<html>
<head>
    <title>P U L L   L I B S    D A T T A ;)</title>
    
    <!-- Estilos de Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="/assets/img/icono.ico" type="image/x-icon">
    <style>
        /* Estilo adicional para los formularios */
        .form-container {
            margin-top: 20px;
            max-width: 400px;
        }
        .favorites {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="https://lucidea.com/wp-content/uploads/2023/03/Generative-AI-Relevance-to-Librarians.webp" class="img-fluid" alt="Imagen de cabecera">

        <div class="favorites">
            <h2>Mis Favoritos</h2>
            <!-- Aquí puedes agregar tus elementos favoritos -->
        </div>

        <div class="mt-3">
            <a href="datacontent.php" class="btn btn-primary">Agregar Datos</a>
            <button class="btn btn-danger" onclick="borrarDatos()">Borrar Datos</button>
        </div>
    </div>

    <!-- Script para borrar datos -->
    <script>
        function borrarDatos() {
            // Aquí puedes agregar el código para borrar los datos guardados
            alert("Borrando datos...");
        }
    </script>
</body>
</html>
