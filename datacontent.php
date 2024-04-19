<!DOCTYPE html>
<html>
<head>
    <title>P U L L   L I B S    D A T T A ;)</title>
    
    <!-- Estilos de Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/jpg" href="/assets/img/fav-ico.jpg"/>
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
        <img src="https://lucidea.com/wp-content/uploads/2023/03/Generative-AI-Relevance-to-Librarians.webp" width="400px" height="400px" 
        align="center" class="img-fluid" alt="Imagen de cabecera">

        <!-- Botones MoviesX, MusicX, WebbyX y SocialX -->
        <div class="mt-3">
            <a href="movies_cont.php" class="btn btn-primary">MoviesX</a>
            <a href="music_cont.php" class="btn btn-primary">MusicX</a>
            <a href="webby_cont.php" class="btn btn-primary">WebbyX</a>
            <a href="social_cont.php" class="btn btn-primary">SocialsX</a>
        </div>

        <div class="mt-3">
            <a href="inicio.php" class="btn btn-primary">Volver Al INICIO</a>
        </div>
    </div>
    <!-- Script para borrar datos -->
    <script>
        function borrarDatos() {
            // Aquí puedes agregar el código para borrar los datos guardados
            alert("Borrando datos...");
        }
    </script>
    <!-- Agrega los enlaces a Bootstrap JS (opcional, si necesitas funcionalidades adicionales de Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
