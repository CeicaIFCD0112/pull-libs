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
        <form method="post" action="guardar_datos_social.php">
            <div class="form-group">
                <label for="facebook">facebook:</label>
                <input type="text" class="form-control" id="facebook" name="facebook">
            </div>
            <div class="form-group">
                <label for="instagram">Instagram:</label>
                <input type="text" class="form-control" id="instagram" name="instagram">
            </div>
            <div class="form-group">
                <label for="youtube">Youtube:</label>
                <input type="text" class="form-control" id="youtube" name="youtube">
            </div>
            <div class="form-group">
                <label for="tiktok">TikTok:</label>
                <input type="text" class="form-control" id="tiktok" name="tiktok">
            </div>
            <div class="form-group">
                <label for="telegram">Contenido:</label>
                <input type="text" class="form-control" id="telegram" name="telegram">
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