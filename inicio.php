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
        <img src="https://lucidea.com/wp-content/uploads/2023/03/Generative-AI-Relevance-to-Librarians.webp" width="400px" height="400px" align="center" class="img-fluid" alt="Imagen de cabecera">

        <div class="favorites">
            <h2>Mis Favoritos</h2>
            <!-- Aquí puedes agregar tus elementos favoritos -->
        </div>
        <div class="container">
        <h2>Tabla de Contenidos(Películas, Series, Cortos, Musica, WebsX, SocialsX)</h2>
        <p>Sección MoviesX</p>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Película</th>
                    <th>Serie</th>
                    <th>Cortos</th>
                    <th>Favoritos</th>
                    <th>URL</th>
                </tr>
            </thead>
            <tbody>
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

            // Consulta para obtener los registros de la tabla
                $sql = "SELECT * FROM `movies`";
                $result = $conn->query($sql);

                // Si hay registros, mostrarlos en la tabla
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["pelicula"] . "</td>";
                        echo "<td>" . $row["serie"] . "</td>";
                        echo "<td>" . $row["corto"] . "</td>";
                        echo "<td>" . $row["favs"] . "</td>";
                        echo "<td>" . $row["url"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No se encontraron registros</td></tr>";
                }

                // Cerrar conexión a la base de datos
                $conn->close();
                ?>
            </tbody>
        </table>
<hr>
        <p>Sección MusicX</p>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Autor</th>
                    <th>Titulo</th>
                    <th>Genero</th>
                    <th>Social</th>
                    <th>Favoritos</th>
                    <th>URL</th>
                </tr>
            </thead>
            <tbody>
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

            // Consulta para obtener los registros de la tabla
                $sql = "SELECT * FROM `music`";
                $result = $conn->query($sql);

                // Si hay registros, mostrarlos en la tabla
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["autor"] . "</td>";
                        echo "<td>" . $row["titulo"] . "</td>";
                        echo "<td>" . $row["genero"] . "</td>";
                        echo "<td>" . $row["social"] . "</td>";
                        echo "<td>" . $row["favs"] . "</td>";
                        echo "<td>" . $row["url"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No se encontraron registros</td></tr>";
                }

                // Cerrar conexión a la base de datos
                $conn->close();
                ?>
            </tbody>
        </table>
<hr>
        <p>Sección UrlsX</p>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>URL</th>
                    <th>Nombre</th>
                    <th>Contenido</th>
                    <th>Favoritos</th>
                </tr>
            </thead>
            <tbody>
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

            // Consulta para obtener los registros de la tabla
                $sql = "SELECT * FROM `webby`";
                $result = $conn->query($sql);

                // Si hay registros, mostrarlos en la tabla
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["url"] . "</td>";
                        echo "<td>" . $row["nombre"] . "</td>";
                        echo "<td>" . $row["contenido"] . "</td>";
                        echo "<td>" . $row["favs"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No se encontraron registros</td></tr>";
                }

                // Cerrar conexión a la base de datos
                $conn->close();
                ?>
            </tbody>
        </table>
        <hr>
        <p>Sección SocialX</p>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Facebook</th>
                    <th>Instagram</th>
                    <th>Youtube</th>
                    <th>TikTok</th>
                    <th>Telegram</th>
                    <th>Favoritos</th>
                </tr>
            </thead>
            <tbody>
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

            // Consulta para obtener los registros de la tabla
                $sql = "SELECT * FROM `social`";
                $result = $conn->query($sql);

                // Si hay registros, mostrarlos en la tabla
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["facebook"] . "</td>";
                        echo "<td>" . $row["instagram"] . "</td>";
                        echo "<td>" . $row["youtube"] . "</td>";
                        echo "<td>" . $row["tiktok"] . "</td>";
                        echo "<td>" . $row["telegram"] . "</td>";
                        echo "<td>" . $row["favs"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No se encontraron registros</td></tr>";
                }

                // Cerrar conexión a la base de datos
                $conn->close();
                ?>
            </tbody>
        </table>
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
  <!-- Agrega los enlaces a Bootstrap JS (opcional, si necesitas funcionalidades adicionales de Bootstrap) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>
