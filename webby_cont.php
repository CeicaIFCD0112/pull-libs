<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Webbs</title>
    <!-- Agrega los enlaces a Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Formulario de Musica</h2>
        <form method="post" action="guardar_datos_webby.php">
            <div class="form-group">
                <label for="url">Url:</label>
                <input type="text" class="form-control" id="url" name="url">
            </div>
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="form-group">
                <label for="contenido">Contenido:</label>
                <input type="text" class="form-control" id="contenido" name="contenido">
            <div class="form-group">
                <label for="favs">Favoritos:</label>
                <select class="form-control" id="favs" name="favoritos">
                    <option value="Sí">Sí</option>
                    <option value="No">No</option>
                </select>
            </div>
            <div class="form-group">
                <label for="url">URL:</label>
                <input type="text" class="form-control" id="url" name="url">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>

    <!-- Agrega los enlaces a Bootstrap JS (opcional, si necesitas funcionalidades adicionales de Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>